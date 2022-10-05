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

    function insertOs($name,$tipo,$domicilio,$telefono){
        $query = $this->db->prepare("INSERT INTO obrasocial(nombre, tipo, domicilio, telefono) VALUES (?,?,?,?)");
        $query -> execute([$name,$tipo,$domicilio,$telefono]);
    }

    function getObrasocialbyID($id){
        $query = $this->db->prepare("SELECT * FROM obrasocial WHERE id=?");
        $query->execute([$id]);
        $os = $query->fetchAll(PDO::FETCH_OBJ);
        return $os;
    }

    function actualizarOs($id,$name,$tipo,$domicilio,$telefono){
        $query= $this->db->prepare("UPDATE obrasociaL SET nombre=?,tipo=?,domicilio=?,telefono=? WHERE id=? ");
        $query-> execute([$name,$tipo,$domicilio,$telefono,$id]);
    }

    function eliminarOs($id){
        $query = $this->db->prepare('DELETE FROM obrasocial WHERE id = ?');
        $query->execute([$id]);
    }
}