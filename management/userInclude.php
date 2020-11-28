<?php
    include "../connection.php";
	
    $userName     = $_POST['user_name'];
    $userLastname = $_POST['user_lastname'];
    $userEmail    = $_POST['user_email'];
    $userPassword = $_POST['user_password'];
	$userKey 	  = rand(111111,999999);
	
	if ($dados = mysqli_query($connection, "INSERT INTO users (userName, userLastname, userEmail, userPassword, userKey) VALUES ('$userName', '$userLastname', '$userEmail', '$userPassword', '$userKey')")){
		$tasks = mysqli_query($connection, "CREATE TABLE `table_$userKey` ( `taskID` INT(11) NOT NULL AUTO_INCREMENT , `taskTitle` VARCHAR(150) NOT NULL , `taskDesc` VARCHAR(200) NULL , `taskCreateDate` DATETIME NOT NULL , `taskDateStart` DATETIME NOT NULL, `taskDateFinish` DATETIME NOT NULL , `isImportant` BOOLEAN NOT NULL , `taskIcon` VARCHAR(100) NULL , PRIMARY KEY (`taskID`)) ENGINE = InnoDB;"); 
		
		if($tasks){
			header('location:../menus/userCreated.php');
		} else {
			header('location:../errors/userProblem.php');
		}
	} else {
		header('location:../errors/userProblem.php');
	}