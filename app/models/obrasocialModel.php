<?php

class obrasocialModel{

    public $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=consultorio;charset=utf8', 'root', '');
    }

    function getObrasocial(){
        $query = $this->db->prepare("SELECT * FROM obrasocial");
        $query->execute();
        $os = $query->fetchAll(PDO::FETCH_OBJ);
        return $os;
    }

}