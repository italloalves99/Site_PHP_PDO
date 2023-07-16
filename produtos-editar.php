<?php 
    
    require_once 'cabecalho.php';
    require_once 'classes/Produto.php';
?>

<?php

    $id = $_GET['id'];
    $produto = new Produto($id);
    $produto->atualizar();

?>

<div class="row">
    <div class="col-md-12">
        <h2>Editar Produtos</h2>
    </div>
</div>
<form action="produtos-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="hidden" name="id" value="<?php echo $produto->id ?>">
                <input type="text" name="nome" value="<?php echo $produto->nome ?>" class="form-control" placeholder="Nome da Categoria">
                <label for="nome">Preço</label>
                <input type="text" name="preco" value="<?php echo $produto->preco ?>" class="form-control" placeholder="Nome da Categoria">
                <label for="nome">Quantidade</label>
                <input type="text" name="quantidade" value="<?php echo $produto->quantidade ?>" class="form-control" placeholder="Nome da Categoria">
                <label for="nome">Categoria</label>
                <br>
                <input type="radio" name="categoria_id" value="1">Livros
                <input type="radio" name="categoria_id" value="2">Jogos
                <input type="radio" name="categoria_id" value="3">Filmes
                <input type="radio" name="categoria_id" value="4">Revistas

            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php' ?>
