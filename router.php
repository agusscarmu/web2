<?php
require_once "views/template.php";
require_once "views/modulos/ingresar.php";
require_once "views/modulos/inicio.php";
require_once "views/modulos/nosotros.php";
require_once "views/modulos/registrarse.php";
require_once "views/modulos/soporte.php";
require_once "controllers/controller.php";


if($_GET['action']==''){
    $action='inicio';
}else{
    $action = $_GET['action'];
}

$parse = explode ('/',$action);

$registController = new registController;
        
switch($parse[0]){
    case 'registro':
    $registController->addRegistro();
    break;

    case 'inicio':
    showInicio();
    break;

    case 'ingresar':
    showIngresar();
    break;

    case 'nosotros':
    showNosotros();
    break;

    case 'registrarse':
    showRegistrarse();
    break;
    
    case 'soporte':
    showSoporte();
    break;
        
    
    }

