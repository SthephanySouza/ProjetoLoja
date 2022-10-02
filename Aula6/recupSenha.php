<?php
    include 'conexao.php';

    $vEmail = $_POST['login'];

    $consulta = $cn->query("select * from tbl_usuario where Login = '$vEmail'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    echo $exibe['Senha'];

?>