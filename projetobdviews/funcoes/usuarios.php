<?php

declare(strict_types = 1);

require_once('../config/bancodedados.php');

function login(string $email, string $senha){
    global $pdo;
    
    //Inserção do usuário adm
    $stament = 
        $pdo->query("SELECT * FROM usuario WHERE email = 'adm@adm.com'");
    $usuario = $stament->fetchAll(PDO::FETCH_ASSOC);
    //verifica se o usuário não existe, se não existir, vamos criar
    if (!$usuario){
        novoUsuario('Administrador', 'adm@adm.com', 'adm', 'adm');
    }

    //Verificar email e senha do usuário
    $stament = 
        $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
        //validar os valores com EXPRESSÕES REGULARES - validar se é um email
    $stament->execute([$email]);
    $usuario = $stament->fetch(PDO::FETCH_ASSOC);
    if($usuario && password_verify($senha, $usuario['senha'])){
        return $usuario;
    } else {
        return null;
    }
}

function novoUsuario(string $nome, string $email, string $senha, string $nivel):bool{
    global $pdo;
    $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);
    $stament = $pdo->prepare("INSERT INTO usuario (nome, email, senha, nivel) VALUES (?, ?, ?, ?)");
    return $stament->execute([$nome, $email, $senha_criptografada, $nivel]);
}

function excluirUsuario(int $id):bool{
    global $pdo;
    $stament = $pdo->prepare("DELETE FROM usuario WHERE id = ?");
    return $stament->execute([$id]);
}

function todosUsuarios(): array{
    global $pdo;
    $stament = $pdo->query(" SELECT * FROM usuario WHERE nivel <> 'adm' ");
    return $stament->fetchAll(PDO::FETCH_ASSOC);
}

function retornaUsuarioPorId(int $id): ?array{
    global $pdo;
    $stament = $pdo->prepare("SELECT * FROM usuario WHERE id = ? AND nivel <> 'adm'");
    $stament->execute([$id]);
    $usuario = $stament->fetch(PDO::FETCH_ASSOC);
    return $usuario ? $usuario : null;
}