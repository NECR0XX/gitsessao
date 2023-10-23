<?php
require_once '../Config/config.php';
require_once '../app/Controller/UsuarioController.php';

$usuarioController = new UsuarioController($pdo);

if (isset($_POST['usuario']) && 
    isset($_POST['senha']) &&
    isset($_POST['email'])) 
{
    $usuarioController->criarUsuario($_POST['usuario'], $_POST['senha'], $_POST['email']);
}

$usuarios = $usuarioController->listarUsuarios();

?>

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
include 'verifica_login.php'
?>

<h2>Olá <?php echo $_SESSION['usuarioNomedeUsuario'] , "!"; ?> </h2><br>

<script>
function logout() {
    window.location.href = "logout.php";
}
</script>

<button class="exitbutton" onclick="logout()">Sair</button>

<?php
$usuarioController->exibirListaUsuarios();
?>

</body>
</html>