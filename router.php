<?php
require_once "./app/controllers/adminController.php";
require_once "./app/controllers/pageController.php";
require_once "./app/controllers/loginController.php";
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('ADMIN_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/administracion');



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
    break;

    case 'modificar':
    $id = $parse[1];
    $adminController->modificarPaciente($id);
    break;

    case 'borrar':
    $id = $parse[1];
    $adminController->borrarPaciente($id);
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

