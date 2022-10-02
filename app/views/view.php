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
   
    function showAdministracion($pacientes){
        $this->smarty->assign('pacientes',$pacientes);
        $this->smarty->display('listaAdminPacientes.tpl');
        }
    
    function showObrasocial($oSocial){
        $this->smarty->assign('osocial',$oSocial);
        $this->smarty->display('Administracion.tpl');
    }


}