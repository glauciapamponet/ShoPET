<?php
  if(!isset($_SESSION)){
     session_start();
  }
  include("../connection.php");

  if(isset($_SESSION["usuario"])){
    $query = mysqli_query($connect, "SELECT c.idproduto, SUM(c.quantidade) as qtd , p.nomeprod, p.precoprod, p.desc,
                                      SUM(p.precoprod*c.quantidade) as sub, p.pathimage FROM carrinho c, produto p,
                                      cliente cli WHERE cli.idcliente = c.idcliente AND p.idproduto = c.idproduto
                                      AND cli.emailcliente = '".$_SESSION["usuario"]."' GROUP BY p.nomeprod");
    

  }

?>
