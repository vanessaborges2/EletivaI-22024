<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
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
            
            <tr>
                <td>1</td>
                <td>Tênis</td>
                <td>Tênis Azul</td>
                <td>R$20,00</td>
                <td>10</td>
                <td>Calçado</td>
                <td>
                    <a href="editar_produto.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_produto.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
