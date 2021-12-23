<?php
  if(!isset($_SESSION)){
     session_start();
  }
  include("../connection.php");

  if(isset($_SESSION["usuario"])){
    $query = mysqli_query($connect, "SELECT idcliente FROM cliente WHERE emailcliente = '".$_SESSION["usuario"]."'");
    $resid = mysqli_fetch_array($query);
    // if(mysqli_query($connect, "DELETE FROM carrinho WHERE idcliente = '".$resid["idcliente"]."'")){
    //   $estado= $_SESSION['state'];
    //   $cidade= $_SESSION['city'];
    //   $endereco= $_SESSION['adress'];
    //   $cep= $_SESSION['post'];
    //   $tel= $_SESSION['telephone'];
    //
    //    header ("Location: ../index.php");
    // }


// ================== COISAS PRA FAZER AQUI ======================


  //$bool1 = INSERE UM PEDIDO NA TABELA pedido (PRA PEGAR O TOTAL DO PEDIDO VIA CARRINHO NO
  //                                            BANCO, OLHA O cartIcon.php OU O fetchcart.php)

  //$bool2 = INSERE CADA PRODUTO DO CARRINHO NA TABELA grupopedido

  //$bool3 = INSERE STATUS DE PEDIDO CONFIRMADO NA TABELA logstatus (O CAMPO atualização DESSA TABELA É
  //        A HORA DO SISTEMA - COMANDO now() DO MYSQL)
    // if (TEM CAMPOS DE ENDERECO NO $_POST PRA INSERIR(isset)){
    //  INSERE NA TABELA endpedido AS COISAS DO FORMS
    //    if (O CHECKBOX DE GUARDAR ENDEREÇO TA MARCADO) {
    //      INSERIR NA TABELA endcli TUDO QUE TA NO FORMS MENOS TELEFONE E NOME
    //    }
    // }else{
    //    INSERE NA TABELA endpedido O ENDEREÇO QUE TA NO COMBOBOX (PEGA ESSE ENDEREÇO PELO ID DELE NA TABELA endcli E
    //    O NOME DO CLIENTE - NESSE CASO NAO VAI TELEFONE)
    // }

    //if ($bool1 && $bool2 && $bool3) {
      if(mysqli_query($connect, "DELETE FROM carrinho WHERE idcliente = '".$resid["idcliente"]."'")){
        header ("Location: ../index.php");
      }
    //}

  }
?>
