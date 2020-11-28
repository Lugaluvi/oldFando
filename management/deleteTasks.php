<?php
    session_start();

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:../index.php');
    }

    $userTable = $_SESSION['key'];
    include "../connection.php";
    
	if (mysqli_query($connection, "TRUNCATE TABLE table_$userTable")){
        header('location:../menus/homeScreen.php');
	} else {
		header('location:../errors/deleteProblem.php');
	}