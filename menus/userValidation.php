<meta charset="utf-8">

<?php
    session_start();
    $email = $_POST['user_login'];
    $password = $_POST['user_password'];
    
    include '../conexao.php';
    
    $queryResult = "SELECT * FROM users WHERE userEmail = '$email' and userPassword = '$password'";
    $userResult = mysqli_query($conexao, $queryResult);
        
    if(mysqli_num_rows ($userResult) > 0 ){ 
        $reg_usuario = mysqli_fetch_array($userResult);
                
        $_SESSION['email']  = $email; 
        $_SESSION['password']  = $password; 
        $_SESSION['name'] = $reg_usuario["userName"];
        $_SESSION['lastname'] = $reg_usuario["userLastname"];
        
        echo $_SESSION['email'];
        echo $_SESSION['name'];
        echo $_SESSION['lastname'];

        header('location:home.php');
    } else {
        unset ($_SESSION['login']); 
        unset ($_SESSION['senha']);
        echo"<script>window.location='userInvalid.php'</script>";
    }    
?>