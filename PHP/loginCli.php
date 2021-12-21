<?php
  session_start();
  include_once "../connection.php";

  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);

  $query = "SELECT nomecliente FROM cliente, usuario WHERE cliente.emailcliente = '".$email."'
            AND cliente.idcliente = usuario.idcliente AND usuario.senha = md5('{$password}')";

  $result = mysqli_query($connect, $query);

  $row = mysqli_num_rows($result);
  echo $row;

  if($row == 1){
    $_SESSION["usuario"] = $email;
    header("Location: ../index.php");
    exit();
  }else{
    $_SESSION["nao aut"] = true;
    header("Location: ../login.php");
    exit();
  }
?>
