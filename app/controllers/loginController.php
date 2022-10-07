<?php

require_once "./app/views/view.php";
require_once "./app/models/loginModel.php";

class loginController{

    private $login;

    function __construct(){
        $this -> login = new loginModel();
        
    }

    function login(){
        //llevo los datos al model
        $mail = $_POST['loginmail'];
        $pass = $_POST['loginpass'];
        $medico = $this->login->insertLogin($mail);
        
        //traigo los datos, verifico pass e inicio la sesion
        if(!empty($medico) && password_verify($pass, $medico->pass)){
            session_start();
            $_SESSION['ID']=$medico -> ID;
            $_SESSION['mail']=$medico -> mail;

            header ("Location: ". BASE_URL);
            
        }else{
            $this -> view -> showIngresar('Login Incorrecto');
        }
        
        
        
        
    
    }

}