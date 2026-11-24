<?php
    require_once __DIR__ . '/conexao.php';
    $erro = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        $nome = trim($_POST['nome'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $senha = ($_POST['senha'] ?? '');

            $senha = password_hash($senha, PASSWORD_DEFAULT);

            $st = $pdo -> prepare('INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)');
            $st -> execute ([$nome, $email, $senha]);

            header('Location: index.php');
            exit;
    }
?>

    <form method = "post">
        <label>Nome<input type = "text" name = "nome" required ></label>
        <label>Email<input type = "email" name = "email" required ></label>
        <label>Senha<input type = "password" name = "senha" required ></label>

        <button type = "submit">Salvar</button>

    </form>
