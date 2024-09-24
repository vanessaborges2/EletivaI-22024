<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
?>

<div class="container mt-5">
    <h2>Gerenciamento de Compras</h2>
    <a href="nova_compra.php" class="btn btn-success mb-3">Nova Compra</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>10/10/2024</td>
                <td>Tênis</td>
                <td>20</td>
                <td>
                    <a href="excluir_compra.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
