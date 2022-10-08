<?php
require_once "./app/views/view.php";
require_once "./app/models/editModel.php";
require_once "./app/helper/loginHelper.php";


class adminController{
     
    private $model;
    private $osmodel;
    private $view;
    private $helper;

    public function __construct(){
        $this -> model = new editModel();
        $this -> osmodel = new obrasocialModel();
        $this -> view = new userView();

        //barrera de seguridad
        $this->helper = new loginHelper();
        }

    function addRegistro(){
            $this->helper->validate();
            $name= $_POST['name'];
            $edad=$_POST['edad'];
            $dni=$_POST['dni'];
            $motivo=$_POST['motivo'];
            $obrasocial=$_POST['obrasocial'];
            $id= $this->model->insertPaciente($name,$dni,$edad,$motivo,$obrasocial);
            header("Location: " . BASE_URL . "adminpacientes");
        }
    
    function borrarPaciente($id){
        $this->helper->validate();
        $this->model->borrarPaciente($id);
        header("Location: " . BASE_URL . "adminpacientes");
        }

    function modificarPaciente($id){
        $this->helper->validate();
        $modifPx=$this->model->modificarPaciente($id);
        $oSocial = $this->osmodel->getObrasocial();
        $this->view->modificarPaciente($modifPx,$oSocial);
        
        
    }
    function actualizarPaciente(){
        $this->helper->validate();
        $id=$_POST['id'];
        $name= $_POST['name'];
        $edad=$_POST['edad'];
        $dni=$_POST['dni'];
        $motivo=$_POST['motivo'];
        $obrasocial=$_POST['obrasocial'];
        $this->model->actualizarPaciente($id,$name,$dni,$edad,$motivo,$obrasocial);
        header("Location: " . BASE_URL . "adminpacientes");
    }

    function getObras(){
        $this->helper->validate();
        $obras = $this->osmodel->getObrasocial();
        $this->view->showObras($obras);
    }

    function addOs(){
        $this->helper->validate();
        $name= $_POST['name'];
        $tipo=$_POST['tipo'];
        $domicilio=$_POST['domicilio'];
        $telefono=$_POST['telefono'];
        $id= $this->osmodel->insertOs($name,$tipo,$domicilio,$telefono);
        header("Location: " . BASE_URL . "adminseguros");
    }

    public function getNewPx(){
        $this->helper->validate();
        $pacientes = $this->model->getPacientes();
        $oSocial = $this->osmodel->getObrasocial();
        $this->view->showAdminPx($pacientes, $oSocial);
    }

    function editarOs($id){
        $this->helper->validate();
        $oSocial = $this->osmodel->getObrasocialbyID($id);
        $this->view->modificarObrasocial($oSocial);
    }

    function actualizarOs(){
        $this->helper->validate();
        $id=$_POST['id'];
        $name= $_POST['name'];
        $tipo=$_POST['tipo'];
        $domicilio=$_POST['domicilio'];
        $telefono=$_POST['telefono'];
        $this->osmodel->actualizarOs($id,$name,$tipo,$domicilio,$telefono);
        header("Location: " . BASE_URL . "adminseguros");
    }

    function eliminarOs($id){
        $this->helper->validate();
        $this->osmodel->eliminarOs($id);
        header("Location: " . BASE_URL . "adminseguros");
        }
    
    function aviso($id){
        $this->helper->validate();
        $obra = $this->osmodel->getObrasocialbyID($id);
        $this->view->aviso($obra);

    } 
}





