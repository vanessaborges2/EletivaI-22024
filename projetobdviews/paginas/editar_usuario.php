<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Editar Usuário</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Nova Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Atualizar dados</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
