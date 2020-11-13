<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sair? | Fando</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="../images/check-solid.svg">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }

        .btn-goBack {
            background-color: #d9d9d9;
            color: #000;
        }

        .btn-goBack:hover {
            background-color: #b3b3b3;
            color: #000;
        }

        .btn-exit {
            background-color: #262626;
            color: #FFF;
        }

        .btn-exit:hover {
            background-color: #141414;
            color: #FFF;
        }

        button[type=submit] {
            padding: 12px 40px 12px 40px;
            margin: 8px 0;
            border: 1px solid white;
            border-radius: 5px;
        }

        button:hover {
            transition: all ease-in-out .15s;
            background-color: #101010;
        }
    </style>
</head>
<body>
    <form action="endSession.php">
        <br><br><br><br>
        <p><i class="fad fa-door-open fa-4x"></i></p> 
        <h2><b>Deseja mesmo sair?</b></h2>
        <br>
        <button class="btn-goBack" type="submit">Voltar</button>&nbsp&nbsp
        <button class="btn-exit" type="submit">Sair</button>
    </form>
</html>