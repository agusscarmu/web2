<?php
require_once "views/view.php";
class pageController{
    public function __construct(){
        $this -> view = new userView();
    }
    public function getInicio(){
       $this->view->showInicio();
    }

    public function getRegistro(){
        $this->view->showRegistrarse();
    }
    public function getIngreso(){
        $this->view->showIngresar();
    }
    public function getNosotros(){
        $this->view->showNosotros();
    }
    public function getSoporte(){
        $this->view->showSoporte();
    }

}