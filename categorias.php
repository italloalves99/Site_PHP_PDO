<?php require_once 'classes/Categoria.php'; ?>


<?php
    // Orientação a objetos
    $categoria = new Categoria();
    $lista = $categoria->listar();
?>

<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Categorias</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="categorias-criar.php" class="btn btn-info btn-block">Criar Nova Categoria</a>
    </div>
</div><br>

<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th bgcolor="#000" class="text-primary" style="text-align: center;">Id</th>
                    <th bgcolor="#000" class="text-primary" style="text-align: center;">Nome</th>
                    <th bgcolor="#000" class="acao text-primary" style="text-align: center;">Editar</th>
                    <th bgcolor="#000" class="acao text-primary" style="text-align: center;">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $linha): ?>
                    <tr>
                        <td style="text-align: center;"><a href="categorias-detalhe.php" class="btn btn-link"><?php echo $linha['id'] ?></a></td>
                        <td style="text-align: center;"><a href="categorias-detalhe.php" class="btn btn-link"><?php echo $linha['nome'] ?></a></td>
                        <td style="text-align: center;"><a href="categorias-editar.php?id=<?php echo $linha['id']?>" class="btn btn-info">Editar</a></td>
                        <td style="text-align: center;"><a href="categorias-excluir-post.php?id=<?php echo $linha['id']?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'rodape.php' ?>
