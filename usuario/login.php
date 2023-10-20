<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($_SESSION['nao_autenticado'])):
    ?>
    <?php
        endif;
        unset($_SESSION['nao_autenticado']);
    ?>
    
    <h1>Login</h1>
    <form method="post">
        <input type="text" name="usuario" placeholder="Nome de Usuário" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <input type="submit" value="Entrar">
    </form>
    <a href="cadastro.php">CADASTRO</a>
</body>
</html>
