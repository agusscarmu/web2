<?php
require_once "views/view.php";
require_once "models/model.php";

class registController{

    private $model;

    public function __construct(){
        $this -> model = new pageModel();
    }

    function addRegistro(){
            $name= $_POST['name'];
            $dni=$_POST['dni'];
            $especialidad=$_POST['especialidad'];
            $mail=$_POST['mail'];
            $pass=$_POST['pass'];
            $id= $this->model->insertRegistro($name,$dni,$especialidad,$mail,$pass);
        }

        



}





