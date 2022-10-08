<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class userView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        
    }
    
    public function showPacientes($pacientes, $oSocial){
        $this->smarty->assign('pacientes',$pacientes);
        $this->smarty->assign('osocial', $oSocial);
        $this->smarty->assign('count',(count($pacientes)));
        $this->smarty->display('listaPacientes.tpl');
    }
    function showIngresar($error = null){
        $this->smarty->assign("error" ,$error);
        $this->smarty->display('formLogin.tpl');
        }
       
    function showAdministracion($pacientes, $oSocial){
        $this->smarty->assign('countpx',(count($pacientes)));
        $this->smarty->assign('countos',(count($oSocial)));
        $this->smarty->display('Administracion.tpl');
    } 

    function searchPaciente($search){
        $this->smarty->assign('pacientes', $search);
        $this->smarty->display('searchPaciente.tpl');
    }
    
    function aviso ($obra){
        $this->smarty->assign('obra', $obra);
        $this->smarty->display('avisoelim.tpl');
    }

    function showAdminPx($pacientes, $oSocial){
        $this->smarty->assign('pacientes',$pacientes);
        $this->smarty->assign('count',(count($pacientes)));
        $this->smarty->assign('osocial',$oSocial);
        $this->smarty->display('adminPaciente.tpl');
        }

    function modificarPaciente($modifPx,$oSocial){
        $this->smarty->assign('paciente',$modifPx);
        $this->smarty->assign('osocial',$oSocial);
        $this->smarty->display('modificarPaciente.tpl');
    }

    function modificarObrasocial($oSocial){
        $this->smarty->assign('obrasocial',$oSocial);
        $this->smarty->display('modificarObrasocial.tpl');
    }

    function viewPx($viewPx){
        $this->smarty->assign('pacientes', $viewPx);
        $this->smarty->display('viewPaciente.tpl');
    }

    function showObras($obras){
        $this->smarty->assign('obras',$obras);
        $this->smarty->assign('count',(count($obras)));
        $this->smarty->display('adminObrasocial.tpl');
    }
}