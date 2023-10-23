<?php
class AdmModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Adms
    public function criarAdm($usuario, $senha, $email, $tipo_usuario) {
        $sql = "INSERT INTO usuarios (usuario, senha, email, tipo_usuario) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario, $senha, $email, $tipo_usuario]);
    }

    // Model para listar Adms
    public function listarAdms() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Adms
    public function atualizarAdm($id_usuario, $usuario, $senha, $email, $tipo_usuario) {
        $sql = "UPDATE usuarios SET usuario = ?, senha = ?, email = ?, tipo_usuario = ? WHERE id_usuario = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario, $senha, $email, $tipo_usuario, $id_usuario]);
    }
    
    // Model para excluir Adms
    public function excluirAdm($id_usuario) {
        $sql = "DELETE FROM usuarios WHERE id_usuario = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_usuario]);
    }
}
?>