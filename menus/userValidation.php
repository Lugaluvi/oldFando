<?php
    $login = $_POST['user_login'];
    $password = $_POST['user_password'];

    if ($login == "teste@teste.com" && $password == "teste") {
        echo"<script>window.location='home.php'</script>";
    } else {
        echo"<script>window.location='userInvalid.php'</script>";
    }
?>