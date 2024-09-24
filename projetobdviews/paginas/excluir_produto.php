<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'
?>

<div class="container mt-5">
    <h2>Excluir Produto</h2>
    
    <p>Tem certeza de que deseja excluir o produto abaixo?</p>
    <ul>
        <li><strong>Nome:</strong> </li>
        <li><strong>Descrição:</strong> </li>
        <li><strong>Categoria:</strong> </li>
        <li><strong>Preço:</strong> </li>
        <li><strong>Estoque Mínimo:</strong> </li>
    </ul>
    <form method="post">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="produtos.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
