<?php
  if(!isset($_SESSION)){
     session_start();
  }
  include("../connection.php");

  if(isset($_SESSION["usuario"])){
    $query = mysqli_query($connect, "SELECT idcliente FROM cliente WHERE emailcliente = '".$_SESSION["usuario"]."'");
    $resid = mysqli_fetch_array($query);

    $getiduser = mysqli_query($connect, "SELECT idcliente FROM cliente WHERE emailcliente='".$_SESSION['usuario']."';");
    $iduser= mysqli_fetch_assoc($getiduser);

    $query1 = mysqli_query($connect, "SELECT c.idproduto, SUM(c.quantidade) as qtd , p.nomeprod, p.precoprod,
    SUM(p.precoprod*c.quantidade) as sub, p.pathimage FROM carrinho c, produto p,
    cliente cli WHERE cli.idcliente = c.idcliente AND p.idproduto = c.idproduto
    AND cli.idcliente = '".$iduser['idcliente']."' GROUP BY p.nomeprod");


  $total = 0.00;  
    while($row = mysqli_fetch_array($query1)){
      $total += $row["sub"]; //bool1
    } 
    $tipopag = $_POST['pagamento'];
    if($tipopag == 'boleto') $tipopag = 1;
    else $tipopag = 2;
    
    $bool1 = mysqli_query($connect, "INSERT INTO pedido (idcliente, idtipopag, valortotal) VALUES ('".$iduser['idcliente']."','".$tipopag."', '".$total."');");

    $qIdpedido = mysqli_query($connect, "SELECT idpedido FROM pedido ORDER BY idcliente DESC LIMIT 1;");
    $idpedido = mysqli_fetch_array($qIdpedido);

    $query2 = mysqli_query($connect, "SELECT c.idproduto, SUM(c.quantidade) as qtd , p.nomeprod, p.precoprod,
    SUM(p.precoprod*c.quantidade) as sub, p.pathimage FROM carrinho c, produto p,
    cliente cli WHERE cli.idcliente = c.idcliente AND p.idproduto = c.idproduto
    AND cli.idcliente = '".$iduser['idcliente']."' GROUP BY p.nomeprod");

    while($row = mysqli_fetch_array($query2)){
      $bool2= mysqli_query($connect, "INSERT INTO grupopedido (idproduto, idpedido, quantidade, subtotal) VALUES ('".$row['idproduto']."','".$idpedido['idpedido']."', '".$row['qtd']."', '".$row['sub']."');");
    }
  
    $bool3 = mysqli_query($connect, "INSERT INTO logstatus (idpedido, nomestatus, atualizacao) VALUES ('".$idpedido['idpedido']."', 'Pedido Confirmado', now())");


    
    if(isset($_POST['name'], $_POST['telephone'], $_POST['state'], $_POST['city'], $_POST['adress'], $_POST['post'])){
      $nome = $_POST['name'];
      $tel = $_POST['telephone'];
      $estado = $_POST['state'];
      $cidade = $_POST['city'];
      $end = $_POST['adress'];
      $cep = $_POST['post'];
      echo "entrou aki <br>";
      $qEndped = mysqli_query($connect, "INSERT INTO endpedido (idpedido, enderecoped, telefone, cidadeped, estadoped, nomedest, ceped) VALUES ('".$idpedido['idpedido']."', '".$end."', '".$tel."', '".$cidade."', '".$estado."', '".$nome."','".$cep."');");
      if(isset($_POST['saveEnd'])){
        echo "combobox ok <br>";
        $qEndcli = mysqli_query($connect, "INSERT INTO endcli (idcliente, enderecocli, cidadecli, estadocli, cepcli) VALUES ('".$iduser['idcliente']."', '".$end."', '".$cidade."', '".$estado."','".$cep."');");
      } 
    }else{
      echo "aa";
      $qEndCli = mysqli_query($connect, "SELECT enderecocli, cepcli, cidadecli, estadocli FROM endcli WHERE idend= '".$_POST['end']."';");
      $endcli= mysqli_fetch_array($qEndCli);

      $qNome = mysqli_query($connect, "SELECT nomecliente FROM cliente WHERE emailcliente = '".$_SESSION['usuario']."';");
      $nome = mysqli_fetch_array($qNome);

      $qEndped = mysqli_query($connect, "INSERT INTO endpedido (idpedido, enderecoped, cidadeped, estadoped, nomedest, ceped) VALUES ('".$idpedido['idpedido']."', '".$endcli['enderecocli']."', '".$endcli['cidadecli']."', '".$endcli['cidadecli']."', '".$nome['nomecliente']."','".$endcli['cepcli']."');");

    }
    if ($bool1 && $bool2 && $bool3) {
      if(mysqli_query($connect, "DELETE FROM carrinho WHERE idcliente = '".$resid["idcliente"]."'")){
        header ("Location: ../index.php");
      }
    }

  }
?>
