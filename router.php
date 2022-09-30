<?php
// require_once "templates/header.php";
// require_once "views/view.php";
require_once "controllers/adminController.php";
require_once "controllers/pageController.php";
require_once "controllers/loginController.php";
define("URL_PACIENTES", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/ingreso');


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

    case 'nosotros':
    $pageController->getNosotros();
    break;

    case 'administracion':
    $pageController->getNewPx();
    break;
    
    case 'soporte':
    $pageController->getSoporte();
    break;
        
    
    }

