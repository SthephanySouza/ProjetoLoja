<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Recuperar</title>
    <style>
        body{
            margin-top: 100px;
        }
    </style>
</head>
<body>
<div class="container">
    <form class="form form-control-sm" name="frmRecup"  method="post" action="recupSenha.php" autocomplete="off">
        <div class="form-group">
            <div class="col-sm-3 offset-md-4">
                <h2>Recuperar senha</h2>
                <br>
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="login" type="email" id="login" class="form-control form-control-sm" required id="email">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-sm-3 offset-md-4">
                <button type="submit" class="btn btn-primary">Recuperar</button>
        </div>
    </form>
</div>
</body>
</html>