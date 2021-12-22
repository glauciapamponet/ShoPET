<?php
    session_start();
    include_once "../connection.php";

    if(!$_SESSION["usuario"]){
        header("Location: login.php");
        exit();
    }        

    $idprod = $_SESSION['idprod'];
    $quantidade = $_POST['quant'];
    $email = $_SESSION['usuario'];
    
    $getid = "SELECT idcliente FROM cliente WHERE emailcliente='".$email."';";
    $getiduser = mysqli_query($connect, $getid);
    $iduser= mysqli_fetch_assoc($getiduser);

    $check = "SELECT quantidade FROM carrinho WHERE idcliente='".$iduser["idcliente"]."' AND idproduto='".$idprod."';";
    $getqtd = mysqli_query($connect, $check);
    $qtdcheck = mysqli_fetch_assoc($getqtd);

    // echo "$qtdcheck['quantidade']   ";
    if($qtdcheck["quantidade"]){

        $quantidade = $quantidade + $qtdcheck["quantidade"];
        $query= "UPDATE carrinho SET quantidade='".$quantidade."' WHERE idcliente='".$iduser['idcliente']."' AND idproduto='".$idprod."'";

    }else{
        $query = "INSERT INTO carrinho (idcliente, idproduto, quantidade) VALUES ('".$iduser['idcliente']."', '".$idprod."', '".$quantidade."');";
    }    
    echo $query;
    $result = mysqli_query($connect, $query);
    header("Location: ../cart.php");
?>
