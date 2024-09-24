<?php require_once 'cabecalho.php'; ?>

<div class="container mt-5">
    <h2>Login</h2>
    <form method="post" action="dashboard.php">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
