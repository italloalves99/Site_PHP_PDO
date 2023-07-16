<?php require_once 'classes/Produto.php'; ?>


<?php
// Orientação a objetos
$produto = new Produto();
$lista = $produto->listar();
?>


<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Produtos</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="produtos-criar.php" class="btn btn-info btn-block">Criar Novo Produto</a>
    </div>
</div><br>

<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered table-striped table-striped">
            <thead>
                <tr style="text-align: center;">
                    <th bgcolor="#000" class="text-primary" style="text-align: center;">Id</th>
                    <th bgcolor="#000" class="text-primary" style="text-align: center;">Nome</th>
                    <th bgcolor="#000" class="text-primary" style="text-align: center;">Preço</th>
                    <th bgcolor="#000" class="text-primary" style="text-align: center;">Quantidade</th>
                    <th bgcolor="#000" class="text-primary" style="text-align: center;">Categoria</th>
                    <th class="acao text-primary" bgcolor="#000" style="text-align: center;">Editar</th>
                    <th class="acao text-primary" bgcolor="#000" style="text-align: center;">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $linha) : ?>
                    <tr style="text-align: center;">
                        <td><a href="produtos-detalhe.php" class="btn btn-link"><?php echo $linha['id'] ?></a></td>
                        <td><a href="produtos-detalhe.php" class="btn btn-info"><?php echo $linha['nome'] ?></a></td>
                        <td><a href="produtos-detalhe.php" class="btn btn-link"><?php echo $linha['preco'] ?></a></td>
                        <td><a href="produtos-detalhe.php" class="btn btn-link"><?php echo $linha['quantidade'] ?></a></td>
                        <td><a href="produtos-detalhe.php" class="btn btn-link"><?php echo $linha['categoria_id'] ?></a></td>
                        <td><a href="produtos-editar.php?id=<?php echo $linha['id'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="produtos-excluir-post.php?id=<?php echo $linha['id'] ?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'rodape.php' ?>