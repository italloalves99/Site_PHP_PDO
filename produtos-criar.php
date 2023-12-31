<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Criar Nova Produto</h2>
    </div>
</div>
<form action="produtos-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Produto" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço da Produto</label>
                <input type="number" name="preco"  step="0.01" min="0" class="form-control" placeholder="Preço do Produto" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade do Produto</label>
                <input type="number" name="quantidade"  min="0" class="form-control" placeholder="Quantidade do Produto" required>
            </div>
            <div class="form-group">
                <label for="nome" name="categoria_id" >Categoria do Produto</label>
                <!-- <select class="form-control"> -->
                    <!-- <option value="1">Livros</option> -->
                    <!-- <option value="1">Jogos</option> -->
                    <!-- <option value="1">Filmes</option> -->
                    <!-- <option value="1">Revistas</option> -->
                <!-- </select> -->
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
