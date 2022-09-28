<?php
class registModel{

    private $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=Pacientes;charset=utf8', 'root', '');
    }


    public function insertRegistro($name, $dni, $edad, $mail, $pass){
        $query = $this->db->prepare("INSERT INTO Usuarios(name, dni, edad, mail, pass) VALUES (?,?,?,?,?)");
        $query -> execute([$name, $dni, $edad, $mail, $pass]);
    }







}