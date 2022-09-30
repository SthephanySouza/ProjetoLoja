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
    <form class="form" name="frmCadastroCat"  method="post" action="cadastroCat.php"> 
        <label for="prod">Categoria:</label>
			<br>
            <input type="text" id="cat" name="cat" placeholder="Digite a categoria">
            <br><br>
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>