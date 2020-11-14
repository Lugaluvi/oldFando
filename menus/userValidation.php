<meta charset="utf-8">

<?php
    session_start();
    
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    
    include '../conexao.php';
    
    $queryResult = "SELECT * FROM users WHERE userEmail = '$email' and userPassword = '$password'";
    $userResult = mysqli_query($conexao, $queryResult);
        
    if(mysqli_num_rows ($userResult) > 0 ) { 
        $reg_user = mysqli_fetch_array($userResult);
                
        $_SESSION['email']  = $email; 
        $_SESSION['password']  = $password; 
        $_SESSION['name'] = $reg_user["userName"];
        $_SESSION['lastname'] = $reg_user["userLastname"];
        $_SESSION['key'] = $reg_user["userKey"];
        
        echo $_SESSION['email'];
        echo $_SESSION['name'];
        echo $_SESSION['lastname'];
        echo $_SESSION['key'];

        header('location:home.php');
    } else {
        unset ($_SESSION['login']); 
        unset ($_SESSION['senha']);
        echo"<script>window.location='userInvalid.php'</script>";
    }    
?>