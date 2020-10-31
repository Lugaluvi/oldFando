<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minhas Tarefas | Fando</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="../images/check-solid.svg">
    <?php 
		$rand = (string) rand(1,6);
		$image_rand = "../images/fundo".$rand.".jpg";
	?>
</head>
<body style="background-image: url('<?php echo $image_rand?>');">
	<br>
	<div class="div-info">
		<div class="shadow p-4 mb-3 div-home">
			</p>
			<p><i class="fad fa-check fa-3x"></i></p>
			<h2><b>Olá, <?php ?></b></h2>
            <h6 class="form-text text-muted">Boas-vindas a sua lista de tarefas.</h6>
            <p><h6 class="text-muted font-weight-light">Suas tarefas estão listas ao lado (ou abaixo para telas menores).</h6></p>
		</div>
		<div class="shadow p-4 mb-2 div-home">
			</p>
			<h3><b>Painel de Controle</b></h3>
		</div>
	</div>
	<div>
		<div class="shadow p-4 mb-3 div-home div-tasks">
			</p>
			<p><i class="fad fa-user-edit fa-2x"></i></p> 
			<h2><b>Título da Tarefa</b></h2>
			<h6 class="form-text text-muted">Subtítulo</h6>
            <p><h6 class="text-muted font-weight-light">Descrição da tarefa.</h6></p>
			
		</div>
	</div>
</body>
</html>