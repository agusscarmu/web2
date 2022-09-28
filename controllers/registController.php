<?php
require_once "views/view.php";
require_once "models/model.php";

class registController{

    private $model;

    public function __construct(){
        $this -> model = new registModel();
    }

    function addRegistro(){
            $name= $_POST['name'];
            $dni=$_POST['dni'];
            $edad=$_POST['edad'];
            $mail=$_POST['mail'];
            $pass=$_POST['pass'];
            $id= $this->model->insertRegistro($name,$dni,$edad,$mail,$pass);
        }

        



}





