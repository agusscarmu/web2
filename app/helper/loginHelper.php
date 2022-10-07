<?php

class loginHelper{

    public function validate(){
        session_start();
        if(!isset($_SESSION['mail'])) {
            header("Location: " . BASE_URL . "ingresar");
            die();
        }
    }
}