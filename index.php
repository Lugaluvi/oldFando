<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fando - Organize seu dia de forma prática</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="shortcut icon" href="images/check-solid.svg">
	<?php 
		$rand = (string) rand(1,6);
		$image_rand = "images/fundo".$rand.".jpg";
	?>
</head>
<body style="background-image: url('<?php echo $image_rand?>');">
	<br>
	<div class="div-info">
		<div class="shadow p-4 mb-3 div-home">
			</p>
			<p><i class="fad fa-check fa-3x"></i></p>
			<h2><b>Boas-vindas ao Fando.</b></h2>
			<h6 class="form-text text-muted">Seu organizador de tarefas prático e rápido.</h6>
			</p>
			<h6 class="text-muted font-weight-light">O Fando foi criado para permitir que você consiga organizar seu dia de forma simples e prática. <br><br>Crie cards para suas tarefas, defina prioridades e tenha uma rotina mais organizada!</h6>
		</div>
		<div class="shadow p-4 mb-2 div-home">
			</p>
			<p><i class="fad fa-question fa-3x"></i></p>
			<h2><b>Sobre o Fando</b></h2>
			<h6 class="form-text text-muted">Nós viemos em paz. 👽</h6>
			</p>
			<p><h6 class="text-muted font-weight-light">O Fando foi criado como projeto da disciplina de PAC para o Centro Universitário Católica de Santa Catarina.</h6></p>
			<h6>2020 Católica SC | Desenvolvido por <a href="http://quack.epizy.com/">Quack</a></h6>
		</div>
	</div>
	<div>
		<div class="shadow p-4 mb-3 div-home">
			</p>
			<p><i class="fad fa-sign-in fa-3x"></i></p> 
			<h2><b>Faça seu login</b></h2>
			<h6 class="form-text text-muted">Para acessar sua lista de tarefas.</h6>
			<br>
			<form method="POST" action="menus/userValidation.php">
				<div class="form-group">
						<label for="user_login"><b>E-mail</b></label><br>
						<input type="email" name="user_login" placeholder="Insira seu email">
				</div>
				<div class="form-group">
						<label for="user_password"><b>Senha</b></label>
						<input type="password" name="user_password" placeholder="Insira sua senha">
						<small class="form-text text-muted">Suas informações estão seguras conosco.</small>
				</div>
				<div class="text-center">
					<button type="submit">Continuar</button>
				</div>
			</form>
		</div>
		<div class="shadow p-4 mb-3 div-home">
			</p>
			<p><i class="fad fa-user-edit fa-3x"></i></p> 
			<h2><b>Cadastre-se</b></h2>
			<h6 class="form-text text-muted">Comece a organizar o seu dia agora mesmo!</h6>
			<br>
			<form method="POST" action="menus/userInclude.php">
				<div class="form-row">
					<div class="col">
						<label for="user_name"><b>Nome</b></label>
						<input type="text" name="user_name" placeholder="Insira seu nome" maxlength="100" required>
					</div>
					<div class="col">
						<label for="user_lastname"><b>Sobrenome</b></label>
						<input type="text" name="user_lastname" placeholder="Insira seu sobrenome" maxlength="100" required>
					</div>
				</div>
				<br> 
				<div class="form-group">
						<label for="user_email"><b>E-mail</b></label>
						<input type="email" name="user_email" placeholder="Insira seu email" maxlength="150" required>
						<small class="form-text text-muted">Não enviamos spams.</small>
				</div>
				<div class="form-group">
						<label for="user_password"><b>Senha</b></label>
						<input type="password" name="user_password" placeholder="Insira sua senha" maxlength="50" required>
				</div>
				<div class="text-center">
					<button type="submit">Cadastrar</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>