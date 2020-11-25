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
    $task_date_start  = $_POST['task_date_start'];
    $task_date_finish = $_POST['task_date_finish'];
    $is_important     = $_POST['is_important'];
    $task_tag         = $_POST['task_tag'];
    
	if ($dados = mysqli_query($connection, "INSERT INTO table_$userTable (taskTitle, taskDesc, taskCreateDate, taskDateStart, taskDateFinish, isImportant, taskIcon) VALUES ('$task_title', '$task_desc', '$task_create_date', '$task_date_start', '$task_date_finish', '$is_important', '$task_tag')")){
		header('location:../menus/homeScreen.php');
	} else {
        echo $userTable;
        echo $task_title;     
        echo $task_desc;     
        echo $task_create_date;
        echo $task_date_start;
        echo $task_date_finish;
        echo $is_important;
        echo $task_tag;
		//header('location:../errors/taskProblem.php');
	}