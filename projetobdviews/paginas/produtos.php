<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';  
    require_once '../funcoes/produtos.php';
    
    $produtos = buscarProdutos();
?>

<div class="container mt-5">
    <h2>Gerenciamento de Produtos</h2>
    <a href="novo_produto.php" class="btn btn-success mb-3">Novo Produto</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estoque Mínimo</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach($produtos as $p) : ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nome'] ?></td>
                <td><?= $p['descricao'] ?></td>
                <td><?= $p['preco'] ?></td>
                <td><?= $p['estoque_minimo'] ?></td>
                <td><?= $p['nome_categoria'] ?></td>
                <td>
                    <a href="editar_produto.php?id=<?= $p['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_produto.php?id=<?= $p['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
