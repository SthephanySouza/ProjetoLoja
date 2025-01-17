<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastrar Categoria</title>
</head>
<body>
<?php
        session_start();
        include 'conexao.php';
        include 'nav.php';
    ?>
<div class="container ">
    <form class="form form-control-sm" name="frmCadastroCat"  method="post" action="cadastroCat.php">
        <div class="col-sm-3 offset-md-4">
            <h2>Cadastro de categoria</h2>
            <br>
            <label for="prod" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="cat" name="cat">
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>
</body>
</html>