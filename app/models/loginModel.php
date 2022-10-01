<?php

class loginModel{

    public $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=consultorio;charset=utf8', 'root', '');
    }

    public function insertLogin($mail){
        $query = $this->db->prepare("SELECT * FROM medicos WHERE mail =$mail and pass=?");
        $query->execute([]);
        $medico = $query->fetch(PDO::FETCH_OBJ);
        return $medico;
        
    }
}