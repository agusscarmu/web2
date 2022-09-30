<?php
class editModel{

    public $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=consultorio;charset=utf8', 'root', '');
    }


    public function insertPaciente($name, $edad, $dni, $motivo, $obrasocial){
        $query = $this->db->prepare("INSERT INTO pacientes(nombre, edad, dni, motivo, ID_obrasocial) VALUES (?,?,?,?,?)");
        $query -> execute([$name, $dni, $edad, $motivo, $obrasocial]);
        //var_dump($query->errorInfo());
    }

}
