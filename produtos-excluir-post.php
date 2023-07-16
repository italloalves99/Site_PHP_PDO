<?php require_once "classes/Produto.php" ?>

<?php

    $id = $_GET['id'];
    $produto = new Produto($id);

    $produto->excluir();

    header('Location: produtos.php');

?>