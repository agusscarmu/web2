<?php
require_once "./app/views/view.php";
require_once "./app/models/model.php";

class pageController{
    private $view;
    private $model;
    
    
    public function __construct(){
        $this -> view = new userView();
        $this -> model = new pageModel();
        $this -> loginmodel = new loginModel();
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

}