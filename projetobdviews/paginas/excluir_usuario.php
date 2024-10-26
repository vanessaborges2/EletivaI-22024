<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/usuarios.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $id = intval($_POST['id']);
            if (excluirUsuario($id)){
                header('Location: usuarios.php');
                exit();
            } else {
                $erro = "Erro ao excluir o usuário!";
            }
        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    } else {
        if (isset($_GET['id'])){
            $id = intval($_GET['id']);
            $usuario = retornaUsuarioPorId($id);
            if ($usuario == null){
                header('Location: usuarios.php');
                exit();
            }
        } else {
            header('Location: usuarios.php');
            exit();
        }
    }
    
?>

<div class="container mt-5">
    <h2>Excluir Usuário</h2>

    <p>Tem certeza de que deseja excluir o usuário abaixo?</p>

    <ul>
        <li><strong>Nome: <?= $usuario['nome'] ?></strong> </li>
        <li><strong>Email: <?= $usuario['email'] ?></strong> </li>
        <li><strong>Nível: Colaborador</strong> </li>
    </ul>

    <form method="post">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>" />
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="usuarios.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
