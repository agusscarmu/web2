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
        session_start();
    }
    public function getPacientes(){
        $pacientes = $this->model->getPacientes();
        $oSocial = $this->osmodel->getObrasocial();
        $this->view->showPacientes($pacientes, $oSocial);

    }

    public function getObrassociales(){
        $oSocial = $this->osmodel->getObrasocial();
        $this->view->showObrassociales($oSocial);

    }

    public function getIngreso(){
        $this->view->showIngresar();
    }

    public function searchPx(){
        $id= $_GET['obrasocial'];
        $search=$this->model->searchPx($id);
        $this->view->searchPaciente($search);
    }

    public function verPaciente($id){
        $viewPx=$this->model->viewPx($id);
        $this->view->viewPx($viewPx);
    }

}