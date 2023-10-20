<?php
require_once 'app/Models/AdmModel.php';

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

    public function listarAdmsComLimite($limite) {
        return $this->admModel->listarAdmsComLimite($limite);
    }

    public function exibirListaAdms() {
        $adms = $this->admModel->listarAdms();
        include 'Views/adm/lista.php';
    }

    public function atualizarAdm($id_usuario, $usuario, $senha, $email, $tipo_usuario) {
        $this->admModel->atualizarAdm($id_usuario, $usuario, $senha, $email, $tipo_usuario);
    }
    
    public function excluirAdm($id_usuario) {
        $this->admModel->excluirAdm($id_usuario);
    }
}
?>