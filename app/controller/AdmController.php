<?php
require_once '../app/Model/AdmModel.php';

class AdmController {
    private $admModel;

    public function __construct($pdo) {
        $this->admModel = new AdmModel($pdo);
    }

    public function criarAdm($usuario, $senha, $email, $tipo_usuario) {
        $this->admModel->criarAdm($usuario, $senha, $email, $tipo_usuario);
    }

    public function listarAdms() {
        return $this->admModel->listarAdms();
    }

    public function exibirListaAdms() {
        $adms = $this->admModel->listarAdms();
        include '../app/View/lista/usuario.php';
    }

    public function atualizarAdm($id_usuario, $usuario, $senha, $email, $tipo_usuario) {
        $this->admModel->atualizarAdm($id_usuario, $usuario, $senha, $email, $tipo_usuario);
    }
    
    public function excluirAdm($id_usuario) {
        $this->admModel->excluirAdm($id_usuario);
    }
}
?>