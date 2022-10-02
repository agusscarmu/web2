<?php
require_once "./app/views/view.php";
require_once "./app/models/editModel.php";
require_once "./app/models/obrasocialModel.php";

class pageController{
    private $view;
    private $model;
    private $osmodel;
    
    
    public function __construct(){
        $this -> view = new userView();
        $this -> model = new editModel();
        $this -> loginmodel = new loginModel();
        $this -> osmodel = new obrasocialModel();
    }
    public function getPacientes(){
        $pacientes = $this->model->getPacientes();
        $this->view->showPacientes($pacientes);

    }

    public function getNewPx(){
        $pacientes = $this->model->getPacientes();
        $this->view->showAdministracion($pacientes);
    }
    public function getIngreso(){
        $this->view->showIngresar();
    }

    function getObrasocial(){
        $oSocial = $this->osmodel->getObrasocial();
        $this->view->showObrasocial($oSocial);
    }

}