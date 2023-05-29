<?php

require_once("Pdo.php");

class Proveedores extends ConexiónPdo{
    
    private $proveedorId;
    private $nombre;
    private $telefono;
    private $ciudad;

    public function __construct($proveedorId= 0, $nombre= "", $telefono=0, $ciudad=""){
        $this->proveedorId = $proveedorId;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->ciudad = $ciudad;
        parent::__construct();
    }
    
    //Getters
    public function getProveedorId(){
        return $this->proveedorId;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    //Setters
    public function setProveedorId($proveedorId){
        $this->proveedorId =$proveedorId;
    }

    public function setNombre($nombre){
        $this->nombre =$nombre;
    }

    public function setTelefono($telefono){
        $this->telefono =$telefono;
    }

    public function setCiudad($ciudad){
        $this->ciudad =$ciudad;
    }

    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO proveedores(nombre,telefono,ciudad) 
            VALUES (:nomb,:cel,:dire)");
            $stm->bindParam(":nomb",$this->nombre);
            $stm->bindParam(":cel",$this->telefono);
            $stm->bindParam(":dire",$this->ciudad);
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function getAll(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM proveedores");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
    
    public function delete(){
        try {
            $stm = $this-> dbCnx -> prepare("DELETE FROM proveedores WHERE proveedorId = :id");
            $stm->bindParam(":id",$this->proveedorId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
    
    public function selectOne(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM proveedores WHERE proveedorId = :id");
            $stm->bindParam(":id",$this->proveedorId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function update(){
        try {
            $stm = $this-> dbCnx -> prepare("UPDATE proveedores SET nombre=:nomb , telefono=:tel , ciudad=:city
            WHERE proveedorId = :id");
            $stm->bindParam(":id",$this->proveedorId);
            $stm->bindParam(":nomb",$this->nombre);
            $stm->bindParam(":tel",$this->telefono);
            $stm->bindParam(":city",$this->ciudad);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
}
?>