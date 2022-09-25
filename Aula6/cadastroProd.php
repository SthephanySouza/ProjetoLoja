<?php
    include 'conexao.php';

    $vProd = $_POST['prod'];
    $vPrec = $_POST['preco'];
    $vCat = $_POST['cat'];
    
    $consulta = $cn->query("select codigo, produto, preco from tbl_produto where produto = '$vProd'");

    if($consulta->rowCount() == 0){
        $insert = $cn->query("
        insert into tbl_produto(produto, preco, cod_cad)
                     values('$vProd', '$vPrec', '$vCat');
        ");
        header('location:index.php');
    }
    else{
        header('location:erro1.php');
    }
?>