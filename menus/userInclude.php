<?php
    include "../conexao.php";
	
    $userName     = $_POST['user_name'];
    $userLastname = $_POST['user_lastname'];
    $userEmail    = $_POST['user_email'];
    $userPassword = $_POST['user_password'];
	$userKey 	  = rand(111111,999999);
	
	if ($dados = mysqli_query($conexao, "INSERT INTO users (userName, userLastname, userEmail, userPassword, userKey) VALUES ('$userName', '$userLastname', '$userEmail', '$userPassword', '$userKey')")){
		$tasks = mysqli_query($conexao, "CREATE TABLE `tabela_$userKey` ( `taskID` INT(11) NOT NULL AUTO_INCREMENT , `taskName` VARCHAR(150) NOT NULL , `taskDesc` VARCHAR(200) NULL , `taskCreateDate` DATETIME NOT NULL , `taskDate` DATETIME NOT NULL , `isImportant` BOOLEAN NOT NULL , `taskIcon` VARCHAR(100) NULL , PRIMARY KEY (`taskID`)) ENGINE = InnoDB;"); 
		
		if($tasks){ 
			echo "<script>window.location='userCreated.php'</script>"; 
		} else {
			echo"<script>window.location='userProblem.php'</script>";
		}
	} else {
		echo"<script>window.location='userProblem.php'</script>";
	}