<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar tarefa | Fando</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="../images/check-solid.svg">
    <link rel="stylesheet" href="../styles/styles_add-task.css">
</head>
<body>
    <?php

	session_start();
    include '../connection.php';

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:../index.php');
    }

    $key = $_SESSION['key'];
    $id = $_GET['id'];
    
    $taskData = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM table_$key WHERE taskID = $id"));

    $task_title = $taskData["taskTitle"];
    $task_desc = $taskData["taskDesc"];
    $task_createDate = $taskData["taskCreateDate"];

    $dateStart = new DateTime($taskData["taskDateStart"]);
    $task_dateStart = $dateStart->format('Y-m-d\TH:i');

    $dateFinish = new DateTime($taskData["taskDateFinish"]);
    $task_dateFinish = $dateFinish->format('Y-m-d\TH:i');

    $task_important = $taskData["isImportant"];
    $task_icon = $taskData["taskIcon"];
    
    ?>
    <br><br>
    <p><i class="fad fa-tasks fa-3x"></i></p> 
    <h2><b>Editar tarefa</b></h2>
    <h6 class="form-text text-muted">Preencha os dados abaixo para editar a tarefa.</h6>
    <br>
    <form method="POST" action="../management/changeTask.php">
        <div class="form-group">
            <label for="task_title"><b>Título da tarefa</b></label>
            <input type="text" value='<?php echo $task_title?>' name="task_title" maxlength="150" required>
        </div>
        <div class="form-group">
            <label for="task_desc"><b>Descrição da tarefa (opcional)</b></label>
            <textarea class="textarea" name="task_desc" rows="2" maxlength="250" required><?php echo $task_desc?></textarea>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="task_date"><b>Inicia em</b></label>
                <input type="datetime-local" value='<?php echo $task_dateStart?>' name="task_date_start" required>
            </div>
            <div class="col">
                <label for="task_date"><b>Termina em</b></label>
                <input type="datetime-local" value='<?php echo $task_dateFinish?>' name="task_date_finish" required>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col">
                <label for="select"><b>É importante?</b></label>
                <select class="select" value='<?php echo $task_important?>' name="is_important" required>
                    <option value="1" <?= $task_important == '1'?'selected':''?>>Sim</option>
                    <option value="0" <?= $task_important == '0'?'selected':''?>>Não</option>
                </select>
            </div>
            <div class="col">
                <label for="select"><b>Etiqueta</b></label>
                <select class="select" value='<?php echo $task_icon?>' name="task_tag" required>
                    <option value="tasks" <?= $task_icon == 'tasks'?'selected':''?>>Nenhuma</option>
                    <option value="exclamation-triangle" <?= $task_icon == 'exclamation-triangle'?'selected':''?>>Alerta</option>
                    <option value="apple-alt" <?= $task_icon == 'apple-alt'?'selected':''?>>Alimentação</option>
                    <option value="sun" <?= $task_icon == 'sun'?'selected':''?>>Dia-a-dia</option>
                    <option value="graduation-cap" <?= $task_icon == 'graduation-cap'?'selected':''?>>Estudos</option>
                    <option value="user-friends" <?= $task_icon == 'user-friends'?'selected':''?>>Encontro</option>
                    <option value="football-ball" <?= $task_icon == 'football-ball'?'selected':''?>>Esporte</option>
                    <option value="spa" <?= $task_icon == 'spa'?'selected':''?>>Lazer</option>
                    <option value="bell" <?= $task_icon == 'bell'?'selected':''?>>Lembrete</option>
                    <option value="briefcase" <?= $task_icon == "briefcase"?'selected':''?>>Trabalho</option>
                </select>
            </div>
        </div>
        <br>
        <button type = "button" onclick="window.location.href='../menus/homeScreen.php'" class="btn-goBack">Voltar</button>&nbsp&nbsp
        <button type="submit" class="btn-exit" name='id' value="<?php echo $id?>">Salvar</button>
    </form>
</html>