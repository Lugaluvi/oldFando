<?php

session_start();

include '../connection.php';

$id = $_SESSION['id'];

$new_name = $_POST['user_name'];
$new_lname = $_POST['user_lname'];
$new_email = $_POST['user_email'];
$new_password = $_POST['user_password'];

$update_query = "UPDATE users SET userName = '$new_name', userLastname = '$new_lname', userEmail = '$new_email', userPassword='$new_password' WHERE userID = '$id'";

$update = mysqli_query($connection, $update_query);

if(!$update){
    mysqli_error($connection);
    return false;
}

session_destroy();

session_start();

$_SESSION['email']  = $new_email; 
$_SESSION['password']  = $new_password; 
$_SESSION['name'] = $new_name;
$_SESSION['lastname'] = $new_lname;

$keyQuery = "SELECT * FROM users WHERE userID = '$id'";
$keyResult = mysqli_query($connection, $keyQuery);

if(mysqli_num_rows($keyResult) > 0){
    $reg_user = mysqli_fetch_array($keyResult);

    $_SESSION['key'] = $reg_user['userKey'];
    $_SESSION['id'] = $reg_user['userID'];
}


header('location:../menus/userChanged.php');

?>