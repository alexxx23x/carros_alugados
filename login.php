<?php
require_once __DIR__ . '/conexao.php';
$erro = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $st = $pdo->prepare('SELECT id_usuario, nome, senha FROM usuario WHERE email = ?');
        $st->execute([trim($_POST['email'] ?? '')]);
        $u = $st->fetch();


    if ($u && password_verify($_POST['senha'] ?? '', $u['senha'])) {
        session_regenerate_id(true);              
        $_SESSION['usuario_id'] = $u['id_usuario'];
        $_SESSION['usuario_nome'] = $u['nome'];    
        $_SESSION['ultimo_acesso'] = time();        
        header('Location: usuario.php');            
     
    }
$erro = 'E-mail ou senha inválidos.';
}

?>
<?php if ($erro): ?><p class="erro"><?= $erro ?></p><?php endif; ?>
<form method="post">
    <label>Email</label>
    <input type="email" name="email" />      
    <label>Senha</label>
    <input type="password" name="senha" />    
    <button type="submit">Salvar</button>    
</form>
