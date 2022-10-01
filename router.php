<?php
require_once "./app/controllers/adminController.php";
require_once "./app/controllers/pageController.php";
require_once "./app/controllers/loginController.php";



if($_GET['action']==''){
    $action='pacientes';
}else{
    $action = $_GET['action'];
}



$parse = explode ('/',$action);

$adminController = new adminController;
$pageController = new pageController;
$loginController = new loginController;

        
switch($parse[0]){
    case 'agregar':
    $adminController->addRegistro();
    $pageController->getNewPx(); 
    break;

    case 'pacientes':
    $pageController->getPacientes();
    break;

    case 'ingreso':
    $loginController->login();
    break;

    case 'ingresar':
    $pageController->getIngreso();
    break;

    case 'administracion':
    $pageController->getNewPx();
    break;
        
    
    }

