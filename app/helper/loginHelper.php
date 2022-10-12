<?php

class loginHelper{

    public function validate(){
        if(!isset($_SESSION['mail'])) {
            header("Location: " . BASE_URL . "ingresar");
            die();
        }
    }
}