<?php
require_once "./libs/smarty-4.2.1/libs/Smarty.class.php";

class userView{
    private $smarty;
    private $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consultorio</title>
    </head>
    <body>
    <header>
        Logotipo
    </header>
    <nav>
        <ul>
            <li><a href="pacientes">Pacientes</a></li>
            <li><a href="ingresar">Ingresar</a></li>
            <li><a href="administracion">Administracion</a></li>
            <li><a href="nosotros">Nosotros</a></li>
            <li><a href="soporte">Soporte</a></li>
        </ul>
    </nav>
    <section>';
    private $html2 =  '</section>
    </body>
    </html>';

    public function __construct(){
        $this -> smarty = new Smarty();
        
    }
    
    public function showPacientes($pacientes){
        echo $this->html;
        ?>
        <h1>PACIENTES</h1>
        <ul>
        <?php
        foreach ($pacientes as $paciente){ 
        
        echo "  <li>
                <span> <b>$paciente->nombre</b> <b>$paciente->edad</b> <b>$paciente->dni</b> <b>$paciente->motivo</b> <b>$paciente->nombre2</b> </span>
                </li>";
        
        }
        
        ?>
        </ul>
        
        <?php
        echo $this->html2;
        }
    
    function showIngresar(){
        echo $this->html;
        ?>
        <Form action="ingreso" method="POST">
            <label for="">Mail:</label><input type="text" name="loginmail" placeholder="ejemplo@mail.com">
            <label for="">Contraseña:</label><input type="password" name="loginpass" placeholder="Contraseña">
            <button type="submit">Iniciar sesion</button>
        </Form>
        <?php
        echo $this->html2;
        }
    

    function showNosotros(){
        echo $this->html;
        ?>
        <h1>nosotros</h1>
        <?php
        echo $this->html2;
        }

    function showAdministracion($pacientes){
        echo $this->html;
        ?>
        <h1>ADMINISTRADOR DE PACIENTES</h1>
        <form action="agregar" method="POST">
            <label for="">Nombre:</label><input type="text" name="name" placeholder="Apellido y Nombre">
            <label for="">Edad:</label><input type="number" name="edad" placeholder="Edad">
            <label for="">DNI:</label><input type="number" name="dni" placeholder="D.N.I.">
            <label for="">Motivo de consulta:</label><input type="text" name="motivo" placeholder="Motivo">
            <label for="">Obra social:</label><input type="number" name="obrasocial" placeholder="obrasocial">
            <button type="submit">Agregar paciente</button>
        </form>
        <?php
        foreach ($pacientes as $paciente){ 
        
            echo "  <li>
                    <span> <b>$paciente->nombre</b> <b>$paciente->edad</b> <b>$paciente->dni</b> <b>$paciente->motivo</b> <b>$paciente->nombre2</b> </span>
                    </li>";
            
            }
        echo $this->html2;
        }
    function showSoporte(){
        echo $this->html;
        ?>
        <h1>soporte</h1>
        <?php
        echo $this->html2;
        }
    




}