<?php
    session_start();

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:../index.php');
    }

    $userTable        = $_SESSION['key'];
    include "../connection.php";

    $task_title       = $_POST['task_title'];
    $task_desc        = $_POST['task_desc'];
    $task_create_date = date('Y-m-d H:i');
    $task_date        = $_POST['task_date'];
    $is_important     = $_POST['is_important'];
    $task_tag         = $_POST['task_tag'];
	
	if ($dados = mysqli_query($connection, "INSERT INTO table_$userTable (taskTitle, taskDesc, taskCreateDate, taskDate, isImportant, taskIcon) VALUES ('$task_title', '$task_desc', '$task_create_date', '$task_date', '$is_important', '$task_tag')")){
		header('location:../menus/homeScreen.php');
	} else {
		header('location:../errors/taskProblem.php');
	}