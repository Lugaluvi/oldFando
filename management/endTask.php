<?php
    session_start();
    include "../connection.php";

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:../index.php');
    }

    $userTable = $_SESSION['key'];
    $taskID = $_GET['id'];

    if (mysqli_query($connection, "DELETE FROM table_$userTable WHERE taskID = $taskID")){
        header('location:../menus/homeScreen.php');
    } else {
        header('location:../errors/deleteProblem.php');
    }