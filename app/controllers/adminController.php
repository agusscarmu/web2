<?php
require_once "./app/views/view.php";
require_once "./app/models/editModel.php";


class adminController{
     
    private $model;
    private $osmodel;
    private $view;

    public function __construct(){
        $this -> model = new editModel();
        $this -> osmodel = new obrasocialModel();
        $this -> view = new userView();
        }

    function addRegistro(){
            $name= $_POST['name'];
            $edad=$_POST['edad'];
            $dni=$_POST['dni'];
            $motivo=$_POST['motivo'];
            $obrasocial=$_POST['obrasocial'];
            $id= $this->model->insertPaciente($name,$dni,$edad,$motivo,$obrasocial);
            header("Location: " . ADMIN_URL);
        }
    
    function borrarPaciente($id){
        $this->model->borrarPaciente($id);
        header("Location: " . ADMIN_URL);
        }

    function modificarPaciente($id){
        $modifPx=$this->model->modificarPaciente($id);
        $oSocial = $this->osmodel->getObrasocial();
        $this->view->modificarPaciente($modifPx,$oSocial);
        
        
    }
    function actualizarPaciente(){
        $id=$_POST['id'];
        $name= $_POST['name'];
        $edad=$_POST['edad'];
        $dni=$_POST['dni'];
        $motivo=$_POST['motivo'];
        $obrasocial=$_POST['obrasocial'];
        $this->model->actualizarPaciente($id,$name,$dni,$edad,$motivo,$obrasocial);
        header("Location: " . BASE_URL);
    }

    function getObras(){
        $obras = $this->osmodel->getObrasocial();
        $this->view->showObras($obras);
    }

    function addOs(){
        $name= $_POST['name'];
        $tipo=$_POST['tipo'];
        $domicilio=$_POST['domicilio'];
        $telefono=$_POST['telefono'];
        $id= $this->osmodel->insertOs($name,$tipo,$domicilio,$telefono);
        header("Location: " . ADMINOS_URL);
    }

    function editarOs($id){
        $oSocial = $this->osmodel->getObrasocialbyID($id);
        $this->view->modificarObrasocial($oSocial);
    }

    function actualizarOs(){
        $id=$_POST['id'];
        $name= $_POST['name'];
        $tipo=$_POST['tipo'];
        $domicilio=$_POST['domicilio'];
        $telefono=$_POST['telefono'];
        $this->osmodel->actualizarOs($id,$name,$tipo,$domicilio,$telefono);
        header("Location: " . ADMINOS_URL);
    }

    function eliminarOs($id){
        $this->osmodel->eliminarOs($id);
        header("Location: " . ADMINOS_URL);
        }
    
}





