<?php


class userView{
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
            <li><a href="registrarse">Registrarse</a></li>
            <li><a href="ingresar">Ingresar</a></li>
            <li><a href="nosotros">Nosotros</a></li>
            <li><a href="soporte">Soporte</a></li>
        </ul>
    </nav>
    <section>';
    private $html2 =  '</section>
    </body>
    </html>';
    
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
        <Form>
            <label for="">Documento:</label><input type="number" placeholder="DNI">
            <label for="">Contraseña:</label><input type="password" placeholder="Contraseña">
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

    function showRegistrarse(){
        echo $this->html;
        ?>
        <h1>REGISTRO DE MEDICO</h1>
        <form action="registro" method="POST">
            <label for="">Su nombre:</label><input type="text" name="name" placeholder="Apellido y Nombre">
            <label for="">Su numero de documento:</label><input type="number" name="dni" placeholder="DNI">
            <label for="">Su especialidad:</label><input type="text" name="especialidad" placeholder="Especialidad">
            <label for="">Su mail:</label><input type="text" name="mail" placeholder="ejemplo@mail.com">
            <label for="">Establezca una contraseña:</label><input type="password" name="pass" placeholder="Contraseña">
            <button type="submit">Registrarse</button>
        </form>
        <?php
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