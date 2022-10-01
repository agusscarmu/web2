<?php

require_once "./app/views/view.php";
require_once "./app/models/loginModel.php";

class loginController{

    private $login;

    function __construct(){
        $this -> login = new loginModel();
        
    }

    function login(){
        $mail = $_POST['loginmail'];
        $pass = $_POST['loginpass'];
        $medico = $this->login->insertLogin($mail);
        if(!empty($medico) && password_verify($pass, $medico->pass)){
            session_start();
            $_SESSION['ID']=$medico -> ID;
            $_SESSION['mail']=$medico -> mail;
            
        }else{
            $this -> view -> showIngresar('Login Incorrecto');
        }
        
        
        
        
    
    }

}