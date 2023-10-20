<?php
class UsuarioModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Usuários
    public function criarUsuario($usuario, $senha, $email, $tipo_usuario) {
        $sql = "INSERT INTO autenticacao (usuario, senha, email, tipo_usuario) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario, $senha, $email, $tipo_usuario]);
    }

    // Model para listar Usuários
    public function listarUsuarios() {
        $sql = "SELECT * FROM autenticacao";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>