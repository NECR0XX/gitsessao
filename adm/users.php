<?php
require_once '../Config/config.php';
require_once '../app/Controller/AdmController.php';

$admController = new AdmController($pdo);

if (isset($_POST['usuario']) && 
    isset($_POST['senha'])&&
    isset($_POST['email'])) 
{
    $admController->criarAdm($_POST['usuario'], $_POST['senha'], $_POST['email']);
}

// Atualiza Adm
if (isset($_POST['id_usuario']) && isset($_POST['atualizar_usuario']) && isset($_POST['atualizar_senha']) && isset($_POST['atualizar_email']) && isset($_POST['atualizar_tipo_usuario'])) {
    $admController->atualizarAdm($_POST['id_usuario'], $_POST['atualizar_usuario'], $_POST['atualizar_senha'], $_POST['atualizar_email'], $_POST['atualizar_tipo_usuario']);
}

// Excluir Adm
if (isset($_POST['excluir_id_usuario'])) {
    $admController->excluirAdm($_POST['excluir_id_usuario']);
}

$adms = $admController->listarAdms();

?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD com MVC e PDO</title>
</head>
<body>
    <a href="admindex.php">Voltar</a>
    <h1>Usuários</h1>
    <form method="post">
        <input type="text" name="usuario" placeholder="Nome" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="text" name="senha" placeholder="E-mail" required>
        <button type="submit">Adicionar Usuário</button>
    </form>

    <h2>Lista de Usuários</h2>
    <ul>
        <?php foreach ($adms as $adm): ?>
            <li><?php echo $adm['usuario']; ?> - <?php echo $adm['senha']; ?> - <?php echo $adm['email']; ?> - <?php echo $adm['tipo_usuario']; ?></li>
        <?php endforeach; ?>
    </ul>

<h2>Atualizar Usuários</h2>
    <form method="post">
        <select name="id_usuario">
        <?php foreach ($adms as $adm): ?>
                                <option value="<?php echo $adm['id_usuario']; ?>"><?php echo $adm['id_usuario']; ?></option>
                                <?php endforeach; ?>
        </select>
                <input type="text" name="atualizar_usuario" placeholder="Novo Nome" required>
                <input type="text" name="atualizar_senha" placeholder="Nova senha" required>
                <input type="email" name="atualizar_email" placeholder="Novo E-mail" required>
                <input type="number" name="atualizar_tipo_usuario" placeholder="Novo Tipo de Usuário" required>
        <button type="submit">Atualizar Usuários</button>
    </form>

    <h2>Excluir Usuário</h2>
    <form method="post">
        <select name="excluir_id_usuario">
            <?php foreach ($adms as $adm): ?>
                <option value="<?php echo $adm['id_usuario']; ?>"><?php echo $adm['usuario']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Usuários</button>
    </form>
</body>
</html>