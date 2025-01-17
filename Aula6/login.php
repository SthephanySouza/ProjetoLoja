<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body{
            margin-top: 100px;
        }

    </style>
</head>
<body>
<div class="container">
    <form class="form form-control-sm" name="frmLogin"  method="post" action="validaLogin.php" autocomplete="off">
        <div class="form-group">
            <div class="col-sm-3 offset-md-4">
                <h2>Login do Usuário</h2>
                <br>
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="login" type="email" id="login" class="form-control form-control-sm" required id="email">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-sm-3 offset-md-4">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control form-control-sm" id="">
                <br>
                <button type="submit" class="btn btn-primary">Entrar</button>
                <a href ="formLogin.php">
				<button type="button" class="btn btn-lg btn-link">
					<h6>Criar conta</h6>
				</button>
			</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>