<?php
if(!$_SESSION['usuarioEmail'] or !$_SESSION['usuarioNomedeUsuario']) {
    header('Location: login.php');
    exit();
}