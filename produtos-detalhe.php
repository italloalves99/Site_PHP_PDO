<?php require_once "classes/Produto.php" ?>
<?php require_once 'cabecalho.php' ?>

    <!-- $id = $_GET['categoria_id'];
    $produto = new Produto($categoria_id);
    $produto->ListCat(); -->

<div class="row">
    <div class="col-md-12">
        <h2>Detalhe da Categoria</h2>
    </div>
</div>

<dl>
    <dt><b>ID</b></dt>
    <dd><i>1</i></dd>
    <dt><b>Nome</b></dt>
    <dd><b>Livros</b></dd>
    <dt><b>Produtos</b></dt>
    <dd>
        <ul>
            <li><a href="/produtos-editar.php">Senhor dos Aneis</a></li>
            <li><a href="/produtos-editar.php">O Guia do Mochileiro das Galáxias</a></li>
        </ul>
    </dd>
</dl>
<?php require_once 'rodape.php' ?>