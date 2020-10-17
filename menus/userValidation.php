<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    $login = $_POST['user_login'];
    $password = $_POST['user_password'];

    if ($login == "teste@teste.com" && $password == "teste") {
        echo"<script>window.location='home.php'</script>";
    } else {
        echo"<script>alert('Login Inválido. Por favor, verifique seus dados.');</script>";
        echo"<script>window.location='../index.php'</script>";
    }
?>