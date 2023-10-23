<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Login</title>
</head>
<body>
    <?php
    if (isset($_SESSION['nao_autenticado'])) {
        echo "<p>Usuário ou senha inválidos.</p>";
        unset($_SESSION['nao_autenticado']);
    }
    ?>

    <h1>Login</h1>
    <form method="post" action="loginconfig.php">
        <input type="text" name="email" placeholder="Email ou Nome de Usuário" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <input type="submit" value="Entrar">
    </form><br><br>
    <a href="../usuarios/cadastro.php">CADASTRO</a>
</body>
</html>
