<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
?>

<div class="container mt-5">
    <h2>Gerenciamento de Usuários</h2>
    <a href="novo_usuario.php" class="btn btn-success mb-3">Novo Usuário</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Nível</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>1</td>
                <td>Usuario</td>
                <td>usuario@gmail.com</td>
                <td>Administrador</td>
                <td>
                    <a href="excluir_usuario.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
