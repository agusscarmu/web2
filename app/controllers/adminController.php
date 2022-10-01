<?php
require_once "./app/views/view.php";
require_once "./app/models/editModel.php";

class adminController{

    private $model;

    public function __construct(){
        $this -> model = new editModel();
    }

    function addRegistro(){
            $name= $_POST['name'];
            $edad=$_POST['edad'];
            $dni=$_POST['dni'];
            $motivo=$_POST['motivo'];
            $obrasocial=$_POST['obrasocial'];
            $id= $this->model->insertPaciente($name,$dni,$edad,$motivo,$obrasocial);
        }
    
        



}





