<?php
    session_start();
    include_once "../connection.php";

    $nome = filter_input (INPUT_POST, 'name');
    $email = filter_input (INPUT_POST, 'email');
    $datanasc = filter_input (INPUT_POST, 'datanasc');
    $password = filter_input (INPUT_POST,'password');

    $queryCHECK = "SELECT idcliente FROM cliente WHERE emailcliente='$email';";
    $result_CHECK = mysqli_query($connect, $queryCHECK);
    $id = mysqli_fetch_assoc($result_CHECK);

    if($id['idcliente']!=""){
        $_SESSION['jaCadastrado'] = true;
        header("Location: ../register.php");

        exit();
        return;
    }

    $queryREGISTER = "INSERT INTO cliente (nomecliente, datanascliente, emailcliente) VALUES ('$nome', '$datanasc', '$email');";
    $result_REG = mysqli_query($connect, $queryREGISTER);

    $queryCLIENTE = "SELECT idcliente FROM cliente ORDER BY idcliente DESC LIMIT 1;";
    $result_CLI = mysqli_query($connect, $queryCLIENTE);
    $idcli = mysqli_fetch_array($result_CLI);

    $queryUSUARIO = "INSERT INTO usuario (idcliente, senha) VALUES ('$idcli[idcliente]', md5('{$password}'))";
    $result_USER = mysqli_query($connect, $queryUSUARIO);


    if(mysqli_insert_id($connect)){
        $_SESSION['sucesso'] = true;
        $_SESSION["usuario"] = $email;
        $_SESSION["senha"] = $password;
        header("Location: ../index.php");
        exit();
    } else{
        $_SESSION['erro'] = true;
    }
    header("Location: ../register.php");
    
?>
