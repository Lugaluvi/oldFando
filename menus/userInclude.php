<?php
    include "../conexao.php";
	
    $userName     = $_POST['user_name'];
    $userLastname = $_POST['user_lastname'];
    $userEmail    = $_POST['user_email'];
    $userPassword = $_POST['user_password'];
	$userKey 	  = rand(111111,999999);
	
	if ($dados = mysqli_query($conexao, "INSERT INTO users (userName, userLastname, userEmail, userPassword, userKey) VALUES ('$userName', '$userLastname', '$userEmail', '$userPassword', '$userKey')")){
		echo "<script>window.location='userCreated.php'</script>";
	} else {
		echo"<script>window.location='userProblem.php'</script>";
	}