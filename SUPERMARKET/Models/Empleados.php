<?php

require_once("./Pdo.php");

class Empleados extends ConexiónPdo{
    
    private $empleadoId;
    private $nombre;
    private $celular;
    private $direccion;
    private $imagen;

    public function __construct($empleadoId= 0, $nombre= "", $celular=0, $direccion="",$imagen=""){
        $this->empleadoId = $empleadoId;
        $this->nombre = $nombre;
        $this->celular = $celular;
        $this->direccion = $direccion;
        $this->imagen = $imagen;
        parent::__construct();
    }
    
    //Getters
    public function getEmpleadoId(){
        return $this->empleadoId;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getImagen(){
        return $this->imagen;
    }

    //Setters
    public function setEmpleadoId($empleadoId){
        $this->empleadoId =$empleadoId;
    }

    public function setNombre($nombre){
        $this->nombre =$nombre;
    }

    public function setCelular($celular){
        $this->celular =$celular;
    }

    public function setDireccion($direccion){
        $this->direccion =$direccion;
    }

    public function setImagen($imagen){
        $this->imagen =$imagen;
    }

    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO empleados(nombre,celular,direccion,imagen) 
            VALUES (:nomb,:cel,:dire,:img)");
            $stm->bindParam(":nomb",$this->nombre);
            $stm->bindParam(":cel",$this->celular);
            $stm->bindParam(":dire",$this->direccion);
            $stm->bindParam(":img",$this->imagen);
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function getAll(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM empleados");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
    
    public function delete(){
        try {
            $stm = $this-> dbCnx -> prepare("DELETE FROM empleados WHERE empleadoId = :id");
            $stm->bindParam(":id",$this->empleadoId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
    
    public function selectOne(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM empleados WHERE empleadoId = :id");
            $stm->bindParam(":id",$this->empleadoId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function update(){
        try {
            $stm = $this-> dbCnx -> prepare("UPDATE empleados SET nombre=:nomb , celular=:descr , direccion=:img
            WHERE empleadoId = :id");
            $stm->bindParam(":id",$this->empleadoId);
            $stm->bindParam(":nomb",$this->nombre);
            $stm->bindParam(":descr",$this->celular);
            $stm->bindParam(":img",$this->direccion);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
}
?>