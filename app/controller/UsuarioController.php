<?php
require_once 'app/Model/UsuarioModel.php';

class UsuarioController {
    private $usuarioModel;

    public function __construct($pdo) {
        $this->usuarioModel = new UsuarioModel($pdo);
    }

    public function criarUsuario($usuario, $senha, $email, $tipo_usuario = 1) {
        $this->usuarioModel->criarUsuario($usuario, $senha, $email, $tipo_usuario);
    }

    public function listarUsuarios() {
        return $this->usuarioModel->listarUsuarios();
    }

    public function exibirListaUsuarios() {
        $usuarios = $this->usuarioModel->listarUsuarios();
        include 'Views/usuario/lista.php';
    }
}
?>