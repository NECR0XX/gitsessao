<!DOCTYPE html>
<html>
<head>
    <title>Lista de Cadastro</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de Cadastro</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuário</th>
                        <th>Senha</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <?php foreach ($adms as $adm): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $adm['id_usuario']; ?></td>
                            <td><?php echo $adm['usuario']; ?></td>
                            <td><?php echo $adm['senha']; ?></td>
                            <td><?php echo $adm['email']; ?></td>
                        </tr>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>

