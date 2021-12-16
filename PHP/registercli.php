<?php
    include_once "../connection.php";
        session_start();

    $nome = filter_input (INPUT_POST, 'name');
    $email = filter_input (INPUT_POST, 'email');
    $datanasc = filter_input (INPUT_POST, 'datanasc');
    $password = filter_input (INPUT_POST, 'password');

    $queryREGISTER = "INSERT INTO cliente (nomecliente, datanascliente, emailcliente) VALUES ('$nome', '$datanasc', '$email');";
    $result_REG = mysqli_query($connect, $queryREGISTER);

    $queryCLIENTE = "SELECT idcliente FROM cliente ORDER BY idcliente DESC LIMIT 1;";
    $result_CLI = mysqli_query($connect, $queryCLIENTE);
    $idcli = mysqli_fetch_array($result_CLI);

    $queryUSUARIO = "INSERT INTO usuario (idcliente, senha) VALUES ('$idcli[idcliente]','$password')";
    $result_USER = mysqli_query($connect, $queryUSUARIO);
?>
