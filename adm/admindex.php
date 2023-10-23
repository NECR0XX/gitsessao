<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
include '../usuario/verifica_login.php'
?>

<h2>Olá <?php echo $_SESSION['usuarioNomedeUsuario'] , "!"; ?> </h2><br>

<script>
function logout() {
    window.location.href = "../usuario/logout.php";
}
</script>

<button class="exitbutton" onclick="logout()">Sair</button><br><br>

    <a href="users.php">Users</a>
</body>
</html>