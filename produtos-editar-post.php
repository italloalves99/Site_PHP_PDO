<?php require_once "classes/Produto.php" ?>

<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $categoria_id = $_POST['categoria_id'];

    $produto = new Produto($id);
    $produto->nome = $nome;
    $produto->preco = $preco;
    $produto->quantidade = $quantidade;
    $produto->categoria_id = $categoria_id;
    $produto->atualizar();
    header('Location: produtos.php');

?>
