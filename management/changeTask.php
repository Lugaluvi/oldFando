<?php
    include '../connection.php';

    session_start();

    $key = $_SESSION['key'];

    $id = $_POST['id'];
    $task_title = $_POST['task_title'];
    $task_desc = $_POST['task_desc'];
    $task_date_start = $_POST['task_date_start'];
    $task_date_finish = $_POST['task_date_finish'];
    $is_important = $_POST['is_important'];
    $task_icon = $_POST['task_tag'];

    $update_query = "UPDATE table_$key SET taskTitle = '$task_title', taskDesc = '$task_desc', taskDateStart = '$task_date_start', taskDateFinish = '$task_date_finish', isImportant = '$is_important', taskIcon = '$task_icon' WHERE taskID = $id";

    $update = mysqli_query($connection, $update_query);

    if($update){
        header('location:../menus/homeScreen.php');
    }