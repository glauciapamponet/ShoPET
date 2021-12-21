<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "glaucia";
    $dbname = "shopet";

    //Cria conexão
    $connect = mysqli_connect($servidor, $usuario, $senha, $dbname);

    //Check
    if (!$connect){
        die ("Falha na conexão: " . mysqli_connect_erro());
    }else{
        //echo "Conexão realizada";
    }
?>
