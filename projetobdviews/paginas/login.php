<?php 

    require_once('../funcoes/usuarios.php');

    session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        try{
            $email = $_POST['email'] ?? "";
            $senha = $_POST['senha'] ?? "";
            if ($email != "" && $senha != ""){
                $usuario = login($email, $senha);
                if ($usuario){
                    $_SESSION['usuario'] = $usuario['nome'];
                    $_SESSION['nivel'] = $usuario['nivel'];
                    $_SESSION['acesso'] = true;
                    header("Location: dashboard.php");
                } else {
                    $erro = "Credenciais inválidas!";
                }
            }
        } catch(Exception $e){
            echo "Erro: ".$e->getMessage();
        }
    }
    require_once 'cabecalho.php'; 
?>

<div class="container mt-5">
    <h2>Login</h2>
    <form method="post">
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
    <?php
        if(isset($erro)) echo "<p class='text-danger'>$erro</p>";
    ?>
</div>

<?php require_once 'rodape.php'; ?>
