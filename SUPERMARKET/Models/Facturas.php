<?php

require_once("Pdo.php");

class Facturas extends ConexiónPdo{
    
    private $facturaId;
    private $empleadoId;
    private $clienteId;
    private $fecha;

    public function __construct($facturaId=0,$empleadoId= 0, $clienteId= 0, $fecha=0){
        $this->facturaId = $facturaId;
        $this->empleadoId = $empleadoId;
        $this->clienteId = $clienteId;
        $this->fecha = $fecha;
        parent::__construct();
    }
    
    //Getters
    public function getFacturaId(){
        return $this->facturaId;
    }

    public function getEmpleadoId(){
        return $this->empleadoId;
    }

    public function getClienteId(){
        return $this->clienteId;
    }

    public function getFecha(){
        return $this->fecha;
    }

    //Setters
    public function setFacturaId($facturaId){
        $this->facturaId =$facturaId;
    }

    public function setEmpleadoId($empleadoId){
        $this->empleadoId =$empleadoId;
    }

    public function setClienteId($clienteId){
        $this->clienteId =$clienteId;
    }

    public function setFecha($fecha){
        $this->fecha =$fecha;
    }

    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO facturas(empleadoId,clienteId,fecha) 
            VALUES (:empleadoId,:clienteId,:fecha)");
            $stm->bindParam(":empleadoId",$this->empleadoId);
            $stm->bindParam(":clienteId",$this->clienteId);
            $stm->bindParam(":fecha",$this->fecha);
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function getAll(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM facturas");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
    
    public function delete(){
        try {
            $stm = $this-> dbCnx -> prepare("DELETE FROM facturas WHERE facturaId = :id");
            $stm->bindParam(":id",$this->facturaId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
    
    public function selectOne(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM facturas WHERE facturaId = :id");
            $stm->bindParam(":id",$this->facturaId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function update(){
        try {
            $stm = $this-> dbCnx -> prepare("UPDATE facturas SET empleadoId=:empleadoId , clienteId=:clienteId , fecha=:fecha
            WHERE facturaId = :id");
            $stm->bindParam(":id",$this->facturaId);
            $stm->bindParam(":empleadoId",$this->empleadoId);
            $stm->bindParam(":clienteId",$this->clienteId);
            $stm->bindParam(":fecha",$this->fecha);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
}
?>