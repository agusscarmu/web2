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

    public function getPacientes(){
        $query = $this->db->prepare("SELECT pacientes.id, pacientes.nombre, pacientes.edad, pacientes.dni, pacientes.motivo, obrasocial.nombre as nombre2 

                                    FROM pacientes 
        
                                    INNER JOIN obrasocial ON (pacientes.ID_obrasocial=obrasocial.id)");
        $query->execute();
        $px = $query->fetchAll(PDO::FETCH_OBJ);
        return $px;
    }

    public function borrarPaciente($id){
        $query = $this->db->prepare('DELETE FROM pacientes WHERE id = ?');
        $query->execute([$id]);
    }

}
