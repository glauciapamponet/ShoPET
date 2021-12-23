<?php

  if(!isset($_SESSION)){
     session_start();
  }
  $connect = mysqli_connect("localhost", "root", "glaucia", "shopet");

  if(!$_SESSION["usuario"]){
    header("Location: ../login.php");
    exit();
  }
  $query = mysqli_query($connect, "SELECT idcliente FROM cliente WHERE emailcliente = '".$_SESSION["usuario"]."'");
  $resid = mysqli_fetch_array($query)["idcliente"];

  if(mysqli_num_rows(mysqli_query($connect, "SELECT * FROM carrinho WHERE idcliente = '".$resid."'")) == 0){
    header("Location: ../index.php");
    exit();
  }

?>
