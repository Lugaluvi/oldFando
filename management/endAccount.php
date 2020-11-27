<?php
    session_start();

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:../index.php');
    }

    $userID    = $_SESSION['id'];
    $userTable = $_SESSION['key'];
    include "../connection.php";
    
	if (mysqli_query($connection, "DELETE FROM users WHERE userID = $userID")){
        mysqli_query($connection, "DROP TABLE table_$userTable");
		unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:../index.php');
	} else {
		header('location:../errors/deleteProblem.php');
	}