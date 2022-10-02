<?php
    include 'conexao.php';

    $cd_prod = $_GET['cd'];

    $consulta = $cn->query("delete from tbl_produto where codigo = '$cd_prod'");
    header('location:index.php')
?>