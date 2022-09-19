<style>
    a{
        text-decoration: none;
        font-size:20px;
        font-weight: bold;
        color:#000;
    }
</style>
<nav>
<a href="index.php">Home</a>
    <a href="formProd.php">Cadastrar Produto</a>
    <a href="formCat.php">Cadastrar Categoria</a>
    <br>
    <?php
        if(empty($_SESSION['ID'])){
            header('location:login.php');
        }
        else{}
    ?>
    <?php
        $consulta_usuario = $cn->query("select Nome from tbl_usuario where Codigo = '$_SESSION[ID]'");
        $exibe_Usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
    ?>
    <a href="#"><?php   echo $exibe_Usuario['Nome']; ?></a>
    <a href="sair.php">Sair</a>
</nav>
<br>
<br>