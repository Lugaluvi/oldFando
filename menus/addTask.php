<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar tarefa | Fando</title>
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
    <br><br>
    <p><i class="fad fa-tasks fa-3x"></i></p> 
    <h2><b>Criar tarefa</b></h2>
    <h6 class="form-text text-muted">Preencha os dados abaixo para criar a tarefa.</h6>
    <br>
    <form method="POST" action="../management/taskInclude.php">
        <div class="form-group">
            <label for="task_title"><b>Título da tarefa</b></label>
            <input type="text" name="task_title" placeholder="Insira o título" maxlength="150" required>
        </div>
        <div class="form-group">
            <label for="task_desc"><b>Descrição da tarefa (opcional)</b></label>
            <textarea class="textarea" name="task_desc" rows="2" placeholder="Insira uma descrição" maxlength="250" required></textarea>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="task_date"><b>Inicia em</b></label>
                <input type="datetime-local" name="task_date_start" required>
            </div>
            <div class="col">
                <label for="task_date"><b>Termina em</b></label>
                <input type="datetime-local" name="task_date_finish" required>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col">
                <label for="select"><b>É importante?</b></label>
                <select class="select" name="is_important" required>
                    <option value="0">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            <div class="col">
                <label for="select"><b>Etiqueta</b></label>
                <select class="select" name="task_tag" required>
                    <option value="tasks">Nenhuma</option>
                    <option value="exclamation-triangle">Alerta</option>
                    <option value="apple-alt">Alimentação</option>
                    <option value="sun">Dia-a-dia</option>
                    <option value="graduation-cap">Estudos</option>
                    <option value="user-friends">Encontro</option>
                    <option value="football-ball">Esporte</option>
                    <option value="spa">Lazer</option>
                    <option value="bell">Lembrete</option>
                    <option value="briefcase">Trabalho</option>
                </select>
            </div>
        </div>
        <br>
        <button onclick="window.location.href='../menus/homeScreen.php'" class="btn-goBack">Voltar</button>&nbsp&nbsp
        <button type="submit" class="btn-exit">Criar</button>
    </form>
</html>