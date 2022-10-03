<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class userView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        
    }
    
    public function showPacientes($pacientes){
        $this->smarty->assign('pacientes',$pacientes);
        $this->smarty->assign('count',(count($pacientes)));
        $this->smarty->display('listaPacientes.tpl');
    }
    function showIngresar(){
        $this->smarty->display('formLogin.tpl');
        }
   
    function showAdministracion($pacientes, $oSocial){
        $this->smarty->assign('pacientes',$pacientes);
        $this->smarty->assign('count',(count($pacientes)));
        $this->smarty->assign('osocial',$oSocial);
        $this->smarty->display('Administracion.tpl');
        }

    function modificarPaciente($modifPx,$oSocial){
        $this->smarty->assign('paciente',$modifPx);
        $this->smarty->assign('osocial',$oSocial);
        $this->smarty->display('modificarPaciente.tpl');
    }

}