<?php
require_once "./app/controllers/adminController.php";
require_once "./app/controllers/pageController.php";
require_once "./app/controllers/loginController.php";
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('ADMIN_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/administracion');
define('MODIF_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/modificar');
define('SEARCH_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/buscar');
define('VIEW_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/ver');
define('ADMINOS_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/adminseguros');
define('MODIFOS_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/editar');



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
    case 'agregarpx':
    $adminController->addRegistro();
    break;

    case 'agregaros':
    $adminController->addOs();
    break;

    case 'buscar':
    $pageController->searchPx();
    break;

    case 'actualizar':
    $adminController->actualizarPaciente();
    break;

    case 'ver':
    $id = $parse[1];
    $pageController->verPaciente($id);
    break;
    
    case 'editar':
    $id = $parse[1];
    $adminController->editarOs($id);
    break;

    case 'actualizaros':
    $adminController->actualizarOs();
    break;

    case 'eliminar':
    $id = $parse[1];
    $adminController->eliminarOs($id);
    break;

    case 'adminseguros':
    $adminController->getObras();
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
    $pageController->getAdmin();
    break;

    case 'adminpacientes':
    $pageController->getNewPx();
    break;
        
    
    }

