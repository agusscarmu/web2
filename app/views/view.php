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
    

    function showNosotros(){
        echo $this->html;
        ?>
        <h1>nosotros</h1>
        <?php
        echo $this->html2;
        }

   
    function showAdministracion($pacientes){
        $this->smarty->assign('count',(count($pacientes)));
        $this->smarty->assign('pacientes',$pacientes);
        $this->smarty->display('Administracion.tpl');
        }


}