<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Excluir Usuário</h2>

    <p>Tem certeza de que deseja excluir o usuário abaixo?</p>

    <ul>
        <li><strong>Nome:</strong> </li>
        <li><strong>Email:</strong> </li>
        <li><strong>Nível:</strong> </li>
    </ul>

    <form method="post">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="usuarios.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
