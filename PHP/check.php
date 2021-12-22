<?php
  if(!isset($_SESSION)){
     session_start();
  }
  include("../connection.php");

  if(isset($_SESSION["usuario"])){
    // $query = mysqli_query($connect, "SELECT c.idproduto, SUM(c.quantidade) as qtd , p.nomeprod, p.precoprod, p.desc,
    //                                   SUM(p.precoprod*c.quantidade) as sub, p.pathimage FROM carrinho c, produto p,
    //                                   cliente cli WHERE cli.idcliente = c.idcliente AND p.idproduto = c.idproduto
    //                                   AND cli.emailcliente = '".$_SESSION["usuario"]."' GROUP BY p.nomeprod");
    $query = mysqli_query($connect, "SELECT idcliente FROM cliente WHERE emailcliente = '".$_SESSION["usuario"]."'");
    $resid = mysqli_fetch_array($query);
    if(mysqli_query($connect, "DELETE FROM carrinho WHERE idcliente = '".$resid["idcliente"]."'")){
      $estado= $_SESSION['state'];
      $cidade= $_SESSION['city'];
      $endereco= $_SESSION['adress'];
      $cep= $_SESSION['post'];
      $tel= $_SESSION['telephone'];

       header ("Location: ../index.php");
    }
  }

?>
