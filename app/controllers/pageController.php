<?php
require_once "./app/views/view.php";
require_once "./app/models/editModel.php";
require_once "./app/models/obrasocialModel.php";
require_once "./app/helper/loginHelper.php";

class pageController{
    private $view;
    private $model;
    private $osmodel;
    private $helper;
    
    
    public function __construct(){
        $this -> view = new userView();
        $this -> model = new editModel();
        $this -> loginmodel = new loginModel();
        $this -> osmodel = new obrasocialModel();
        $this -> helper = new loginHelper();
        session_start();
    }
    public function getPacientes(){
        $pacientes = $this->model->getPacientes();
        $oSocial = $this->osmodel->getObrasocial();
        $this->view->showPacientes($pacientes, $oSocial);

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

    public function getAdmin(){
        $this->helper->validate();
        $pacientes = $this->model->getPacientes();
        $oSocial = $this->osmodel->getObrasocial();
        $this->view->showAdministracion($pacientes, $oSocial);
    }

}