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


    public function obtenerEmpleadoId(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT empleadoId,empleado_nombre FROM empleados");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function EmpleadoId(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT empleadoId,empleado_nombre FROM empleados WHERE empleadoId=:empleadoId");
            $stm->bindParam(":empleadoId",$this->empleadoId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function ClienteId(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT clienteId,clientes_nombre FROM clientes WHERE clienteId=:clienteId");
            $stm->bindParam(":clienteId",$this->clienteId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function obtenerClienteId(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT clienteId,clientes_nombre FROM clientes");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
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
            return $e->getMessage();
        }
    }

    public function getAll(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM facturas INNER JOIN empleados ON facturas.empleadoId = empleados.empleadoId INNER JOIN clientes ON facturas.clienteId = clientes.clienteId");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function delete(){
        try {
            $stm = $this-> dbCnx -> prepare("DELETE FROM facturas WHERE facturaId = :id");
            $stm->bindParam(":id",$this->facturaId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function selectOne(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM facturas WHERE facturaId = :id");
            $stm->bindParam(":id",$this->facturaId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
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
            return $e->getMessage();
        }
    }
}
?>