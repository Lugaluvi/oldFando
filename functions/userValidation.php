<meta charset="utf-8">

<?php
    session_start();
    
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    
    include '../connection.php';
    
    $queryResult = "SELECT * FROM users WHERE userEmail = '$email' and userPassword = '$password'";
    $userResult = mysqli_query($connection, $queryResult);
        
    if(mysqli_num_rows ($userResult) > 0 ) { 
        $reg_user = mysqli_fetch_array($userResult);
                
        $_SESSION['email']  = $email; 
        $_SESSION['password']  = $password; 
        $_SESSION['name'] = $reg_user["userName"];
        $_SESSION['lastname'] = $reg_user["userLastname"];
        $_SESSION['key'] = $reg_user["userKey"];
        $_SESSION['id'] = $reg_user["userID"];
        
        echo $_SESSION['email'];
        echo $_SESSION['name'];
        echo $_SESSION['lastname'];
        echo $_SESSION['key'];

        header('location:../menus/homeScreen.php');
    } else {
        unset ($_SESSION['login']); 
        unset ($_SESSION['senha']);
        header('location:../errors/userInvalid.php');
    }    
?>