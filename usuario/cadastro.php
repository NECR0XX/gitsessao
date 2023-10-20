<?php
require_once '../config.php';
require_once '../app/Controller/UsuarioController.php';

$usuarioController = new UsuarioController($pdo);

if (isset($_POST['usuario']) && isset($_POST['senha']) && isset($_POST['email'])) {
    $usuarioController->criarUsuario($_POST['usuario'], $_POST['senha'], $_POST['email']);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form method="post">
        <input type="text" name="usuario" placeholder="Nome de Usuário" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="submit" value="Cadastrar">
    </form><br><br><br>
    <a href="login.php">LOGIN</a>
</body>
</html>
