<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<form class="form" name="frmLogin"  method="post" action="validaLogin.php"> 
        <label for="login">Login:</label>
			<br>
            <input type="text" id="login" name="login"  placeholder="Digite seu login">
            <br><br>
            <label for="senha">Senha:</label>
            <br>
            <input type="password" id="senha" name="senha"  placeholder="Digite sua senha">
            <br>
            <br>
            <input type="submit" name="cadastro" value="Entrar">
    </form>
</body>
</html>