<?php
    include_once "../connection.php";

    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $query = "SELECT nomecliente FROM cliente, usuario WHERE cliente.emailcliente = '$email' and cliente.idcliente=usuario.idcliente and usuario.senha='$password'";

?>