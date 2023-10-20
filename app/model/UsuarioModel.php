<?php
class AdmModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Adms
    public function criarAdm($usuario, $senha, $email, $tipo_usuario) {
        $sql = "INSERT INTO autenticacao (usuario, senha, email, tipo_usuario) VALUES (?, ?, ?, ?, 1)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario, $senha, $email, $tipo_usuario]);
    }

    // Model para listar Adms
    public function listarAdms() {
        $sql = "SELECT * FROM autenticacao";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>