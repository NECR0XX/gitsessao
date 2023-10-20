<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=autenticacao", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro na conexão com o banco de dados: " . $e->getMessage());
    }

    // Insira os dados na tabela 'usuarios' (corrigido de 'users')
    $stmt = $pdo->prepare("INSERT INTO usuarios (usuario, senha, email) VALUES (?, ?, ?)");
    $stmt->execute([$usuario, $senha, $email]);

    $_SESSION["usuario"] = $usuario;
    header("Location: dashboard.php");
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
