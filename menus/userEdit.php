<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar conta | Fando</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="../images/check-solid.svg">
    <link rel="stylesheet" href="../styles/styles_add-task.css">

    <?php
		session_start();

		$email = $_SESSION['email'];
		$name = $_SESSION['name'];
		$lastName = $_SESSION['lastname'];
        $password = $_SESSION['password'];

	?>
</head>
<body>
    <br><br>
    <p><i class="fad fa-user-edit fa-3x"></i></p> 
    <h2><b>Editar sua conta</b></h2>
    <h6 class="form-text text-muted">Preencha as informações abaixo para editar sua conta.</h6>
    <br>
    <form method="POST" action="../management/changeUser.php">
        <div class="form-row">
            <div class="col">
                <label for="user_name"><b>Nome</b></label>
                <input type="text" name="user_name" value="<?php echo $name?>" maxlength="150" required>
            </div>
            <div class="col">
                <label for="last_name"><b>Sobrenome</b></label>
                <input type="text" name="user_lname" value="<?php echo $lastName?>" maxlength="150" required>
            </div>
        </div>
        <div class="form-group">
            <label for="user_email"><b>E-mail</b></label>
            <input type="text" name="user_email" value="<?php echo $email?>" maxlength="150" required>
        </div>
        <div class="form-group">
            <label for="user_password"><b>Senha</b></label>
            <input type="password" name="user_password" value="<?php echo $password?>" maxlength="150" required>
        </div>
        <br>
        <button type="submit" class="btn-exit" type="submit">Salvar</button>
        <button onclick="window.location.href='../menus/homeScreen.php'" class="btn-goBack"><a href="../menus/homeScreen.php">Cancelar</a></button>&nbsp&nbsp
    </form>
</html>