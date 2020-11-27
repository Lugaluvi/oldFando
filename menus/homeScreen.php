<html>
<head>
	<?php
		session_start();

		if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
			unset($_SESSION['email']);
			unset($_SESSION['password']);
			header('location:../index.php');
		}

		$email = $_SESSION['email'];
		$name = $_SESSION['name'];
		$lastName = $_SESSION['lastname'];
		$key = $_SESSION['key'];
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Minhas Tarefas | Fando</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="../styles/styles_fando.css">
	<link rel="shortcut icon" href="../images/check-solid.svg">
	<?php
		$rand = (string) rand(1, 6);
		$image_rand = "../images/fundo" . $rand . ".jpg";

		include '../connection.php';
		$tasks = "select * from table_$key order by isImportant desc, taskCreateDate";
		$query_tasks = mysqli_query($connection, $tasks);
	?>
</head>

<body style="background-image: url('<?php echo $image_rand ?>');">
	<br>
	<div class="div-info">
		<div class="shadow p-4 mb-3 div-home div-dark-mode">
			</p>
			<p><i class="fad fa-check fa-3x"></i></p>
			<h2><b>Olá, <?php echo $name, " ", $lastName; ?></b></h2>
			<h6 class="form-text text-muted">Boas-vindas a sua lista de tarefas.</h6>
			<br>
			<div class="div-header">
				<h5><b>Opções de conta<b></h5>
				<a id="btn-open-user"><i class="fas fa-angle-down fa-2x angle-user"></i></a>
			</div>
			<div class="user-opt" id="user-opt">
				<br>
				<div class="custom-control custom-switch">
					<input type="checkbox" class="custom-control-input" id="color-switch">
					<label class="custom-control-label font-weight-normal" for="color-switch">Modo Escuro</label>
					<script type="text/javascript">
						$('#color-switch').on('click', function() {
							$(".div-dark-mode").toggleClass('dark-mode');
							$(".btn-dark-first").toggleClass('dark-first');
							$(".btn-dark-second").toggleClass('dark-second');
							$(".btn-dark-third").toggleClass('dark-third');
							$(".btn-create-task").toggleClass('dark-create-task');
							$("hr").toggleClass('dark-hr');
						});
					</script>
				</div>
				<hr>
				<div class="text-center">
					<div class="form-row text-center">
						<div class="col">
							<form action="userEdit.php">
								<button class="btn-first btn-dark-first" type="submit">&nbsp&nbsp<i class="fad fa-user-edit"></i> &nbspEditar conta&nbsp</button>
							</form>
						</div>
						<div class="col">
							<form action="signOut.php">
								<button type="submit" class="btn-second btn-dark-second" type="button"><i class="fad fa-sign-out"></i> &nbspEncerrar Sessão</button>
							</form>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					$('#btn-open-user').on('click', function() {
						$('#user-opt').slideToggle('fast');
						$(".angle-user").toggleClass('flip');
					});
				</script>
			</div>	
		</div>
		<div class="shadow p-4 mb-2 div-home div-dark-mode">
			</p>
			<h3><b>Painel de Controle</b></h3>
			<h6 class="form-text text-muted">Gerencie suas tarefas.</h6>
			<button onclick="window.location.href='addTask.php'" class="btn-create-task" type="button"><i class="fad fa-check"></i> &nbspCriar Tarefa</button>
			<div class="form-row text-center">
				<div class="col">
					<button class="btn-first btn-dark-first" type="submit"><i class="fad fa-exclamation-circle"></i> &nbspSó Importantes</button>
				</div>
				<div class="col">
					<form action="taskDeleteAll.php">
						<button class="btn-second btn-dark-second" type="submit"><i class="fad fa-trash"></i> &nbspDeletar todas</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
		$i = 0;
		while ($user_tasks = mysqli_fetch_array($query_tasks)) {
			$i++;
			$task_title = $user_tasks["taskTitle"];
			$task_desc = $user_tasks["taskDesc"];
			$task_createDate = $user_tasks["taskCreateDate"];
			$task_dateStart = $user_tasks["taskDateStart"];
			$task_dateFinish = $user_tasks["taskDateFinish"];
			$task_important = $user_tasks["isImportant"];
			$task_icon = $user_tasks["taskIcon"];
    ?>
	<div class="shadow p-4 mb-3 div-home div-tasks div-dark-mode">
		<p>
			<div class="div-header">
				<i class="fad fa-<?php echo $task_icon ?> fa-2x"></i>
				<a class="btn-open-task"><i class="fas fa-angle-down fa-2x angle-task"></i></a>
			</div>
		</p>
		<?php
			if ($task_important == 1) {
				echo "
				<div class='div-header'>
					<div class='task-important'></div>
				</div>";
			}
		?>
		<div class="div-opts-task" id="div-opts-task">
		<br>
		<h6 class="text-muted font-weight-light">Criada em <?php echo date('d/m/Y - H:i',strtotime($task_createDate)) ?> </h6>
			<div class="form-row text-center">
				<div class="col">
					<button class="btn-first btn-dark-first" type="button"><i class="fad fa-edit"></i> &nbspEditar</button>
				</div>
				<div class="col">
					<button class="btn-third btn-dark-third" type="button" data-toggle="modal" data-target="#taskModal<?php echo $i; ?>"><i class="fad fa-eye"></i> &nbspExpandir</button>
				</div>
				<div class="col">
					<button class="btn-second btn-dark-second" type="button"><i class="fad fa-trash"></i> &nbspDeletar</button>
				</div>
			</div>
			<hr>
		</div>
		</p>
		<h4><b><?php echo $task_title ?></b></h4>
		<p>
			<h6 class="text-muted font-weight-normal"><b>Em</b> <?php echo date('d/m/Y - H:i',strtotime($task_dateStart)) ?> <b>até</b> <?php echo date('d/m/Y - H:i',strtotime($task_dateFinish)) ?></h6>
		</p>
		<div class="modal fade" id="taskModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="taskModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<h4 class="modal-title"><b>Informações da tarefa<b></h4>
						<h6 class="form-text text-muted"><?php echo $task_title; ?></h6>
						<h6 class="text-muted font-weight-normal">Criada em <?php echo date('d/m/Y - H:i',strtotime($task_createDate))?></h6>
						<br>
						<h6><b>Descrição</b></h6>
						<h6 class="text-muted font-weight-normal"><?php echo $task_desc; ?></h6>
						<br>
						<h6><b>Inicia em</b></h6>
						<h6 class="text-muted font-weight-normal"><?php echo date('d/m/Y - H:i',strtotime($task_dateStart)) ?></h6>
						<br>
						<h6><b>Termina em</b></h6>
						<h6 class="text-muted font-weight-normal"><?php echo date('d/m/Y - H:i',strtotime($task_dateFinish)) ?></h6>
						<hr>
						<button type="button" class="btn-exit-modal" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		}
	?>
	<script type="text/javascript">
		$('.btn-open-task').on('click', function(){
			var $this = $(this);
			$this.closest('.div-tasks').find('.div-opts-task').slideToggle('fast')
			$this.find(".angle-task").toggleClass('flip');
		});
	</script>
</body>
</html>