<?php
  if(!isset($_SESSION)){
     session_start();
  }
  include("../connection.php");

  if(isset($_POST["action"]) && isset($_POST["id"])){
    $query = mysqli_query($connect, "SELECT idcliente FROM cliente WHERE emailcliente = '".$_SESSION["usuario"]."'");
    $resid = mysqli_fetch_array($query);
    if($_POST["action"] == 'delete'){
     if(mysqli_query($connect, "DELETE FROM carrinho WHERE idproduto = '".$_POST["id"]."' AND idcliente = '".$resid["idcliente"]."'")){
      echo 'Deletado!';
    }else{
      echo "AAAAAAAAAA";
    }
    }elseif($_POST["action"] == 'add'){
      if(mysqli_query($connect, "UPDATE carrinho SET quantidade = quantidade+1
                                 WHERE idproduto = '".$_POST["id"]."' AND idcliente = '".$resid["idcliente"]."'")){
       echo 'Adicionado!';
      }
    }elseif($_POST["action"] == 'rmv'){
      if(isset($_POST["value"]) && $_POST["value"] != '1'){
        if(mysqli_query($connect, "UPDATE carrinho SET quantidade = quantidade-1
                                   WHERE idproduto = '".$_POST["id"]."' AND idcliente = '".$resid["idcliente"]."'")){
         echo 'Removido!';
        }
      }
    }
  }

?>
