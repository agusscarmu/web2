<?php
require_once "views/view.php";
require_once "models/model.php";
class pageController{
    private $view;
    private $model;
    
    public function __construct(){
        $this -> view = new userView();
        $this -> model = new pageModel();
    }
    public function getPacientes(){
        $pacientes = $this->model->getPacientes();
        $this->view->showPacientes($pacientes);

    }


    public function getRegistro(){
        $this->view->showRegistrarse();
    }
    public function getIngreso(){
        $this->view->showIngresar();
    }
    public function getNosotros(){
        $this->view->showNosotros();
    }
    public function getSoporte(){
        $this->view->showSoporte();
    }

}