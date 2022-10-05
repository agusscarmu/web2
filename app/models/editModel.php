<?php
class editModel{

    public $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=consultorio;charset=utf8', 'root', '');
    }

    public function getPacientes(){
        $query = $this->db->prepare("SELECT pacientes.id, pacientes.nombre, pacientes.edad, pacientes.dni, pacientes.motivo, obrasocial.nombre as nombre2 

                                    FROM pacientes 
        
                                    INNER JOIN obrasocial ON (pacientes.ID_obrasocial=obrasocial.id) 
                                    
                                    ORDER BY id DESC LIMIT 50");
        $query->execute();
        $px = $query->fetchAll(PDO::FETCH_OBJ);
        return $px;
    }

    public function insertPaciente($name, $edad, $dni, $motivo, $obrasocial){
        $query = $this->db->prepare("INSERT INTO pacientes(nombre, edad, dni, motivo, ID_obrasocial) VALUES (?,?,?,?,?)");
        $query -> execute([$name, $dni, $edad, $motivo, $obrasocial]);
        //var_dump($query->errorInfo());
    }

  
    public function borrarPaciente($id){
        $query = $this->db->prepare('DELETE FROM pacientes WHERE id = ?');
        $query->execute([$id]);
    }

    public function modificarPaciente($id){
        $query = $this->db->prepare("SELECT * FROM pacientes WHERE id =?");
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function actualizarPaciente($id,$name,$dni,$edad,$motivo,$obrasocial){
        $query = $this->db->prepare("UPDATE pacientes SET nombre=?,edad=?,dni=?,motivo=?,ID_obrasocial=? WHERE id=?");
        $query -> execute([$name, $edad, $dni, $motivo, $obrasocial, $id]);
    }
    public function searchPx($id){
        $query = $this->db->prepare("SELECT pacientes.id, pacientes.nombre, pacientes.edad, pacientes.dni, pacientes.motivo, obrasocial.nombre as nombre2, obrasocial.tipo as tipo 

                                    FROM pacientes 

                                    INNER JOIN obrasocial ON (pacientes.ID_obrasocial=obrasocial.id)  WHERE ID_obrasocial = ?");
        $query -> execute([$id]);
        $px = $query->fetchAll(PDO::FETCH_OBJ);
        return $px;
    }
    public function viewPx($id){
        $query = $this->db->prepare("SELECT pacientes.id, pacientes.nombre, pacientes.edad, pacientes.dni, pacientes.motivo, obrasocial.nombre as nombre2, obrasocial.tipo as tipo 

                                    FROM pacientes 
                                
                                    INNER JOIN obrasocial ON (pacientes.ID_obrasocial=obrasocial.id)  WHERE pacientes.id = ?");
        $query -> execute([$id]);
        $px = $query->fetchAll(PDO::FETCH_OBJ);
        return $px;  
    }
}
