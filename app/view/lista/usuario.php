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
                        <th>E-mail</th>
                    </tr>
                </thead>
                <?php foreach ($usuarios as $usuario): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $usuario['id_usuario']; ?></td>
                            <td><?php echo $usuario['usuario']; ?></td>
                            <td><?php echo $usuario['email']; ?></td>
                        </tr>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>