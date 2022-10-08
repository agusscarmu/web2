<?php

require_once "./app/views/view.php";
require_once "./app/models/loginModel.php";

class loginController{

    private $login;
    private $view;

    function __construct(){
        $this -> loginmodel = new loginModel();
        $this -> view = new userView();
        
    }

    function login(){
        //llevo los datos al model
        $mail = $_POST['loginmail'];
        $pass = $_POST['loginpass'];
        $medico = $this->loginmodel->insertLogin($mail);
        
        //traigo los datos, verifico pass e inicio la sesion
        if($medico && password_verify($pass, $medico->pass)){
            session_start();
            $_SESSION['ID']=$medico -> ID;
            $_SESSION['mail']=$medico -> mail;
            $_SESSION['nombre']=$medico -> nombre;

            header ("Location: ". BASE_URL);
            
        } else {
            $this -> view -> showIngresar("El usuario o la contraseña son incorrectos");
        }     
    
    }
    function logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
        

}