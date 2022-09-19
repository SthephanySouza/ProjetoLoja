<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
</head>
<body>
    <?php
        session_start();
        include 'conexao.php';
        include 'nav.php';
    ?>
<form class="form" name="frmCadastroProd"  method="post" action="#"> 
        <label for="prod">Produto:</label>
			<br>
            <input type="text" id="prod" name="prod" placeholder="Digite o produto">
            <br><br>
            <label for="preco">Preço:</label>
            <br>
            <input type="text" id="preco" name="preco" placeholder="Digite o preço">
            <br><br>
    <label for="cat">Selecione a categoria:</label>
    <select id="cat">
        <option>Escolha a Categoria:</option>
        <option value="1">Bebidas</option>
        <option value="2">Papelaria</option>
    </select>
        <br><br>
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>