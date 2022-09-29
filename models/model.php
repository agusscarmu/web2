<?php
class pageModel{
    
    public $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=consultorio;charset=utf8', 'root', '');
    }

    public function insertRegistro($name, $dni, $especialidad, $mail, $pass){
        $query = $this->db->prepare("INSERT INTO medicos(nombre, dni, especialidad, mail, pass) VALUES (?,?,?,?,?)");
        $query -> execute([$name, $dni, $especialidad, $mail, $pass]);
    }

    public function getPacientes(){
        $query = $this->db->prepare("SELECT pacientes.nombre, pacientes.edad, pacientes.dni, pacientes.motivo, obrasocial.nombre as nombre2 

                                    FROM pacientes 
        
                                    INNER JOIN obrasocial ON (pacientes.ID_obrasocial=obrasocial.id)");
        $query->execute();
        $px = $query->fetchAll(PDO::FETCH_OBJ);
        return $px;
    }

}