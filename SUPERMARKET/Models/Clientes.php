<?php

require_once("./Pdo.php");

class Clientes extends ConexiónPdo{
    
    private $clienteId;
    private $celular;
    private $compania;

    public function __construct($clienteId= 0, $celular= "", $compania=""){
        $this->clienteId = $clienteId;
        $this->celular = $celular;
        $this->compania = $compania;
        parent::__construct();
    }
    
    //Getters
    public function getClienteId(){
        return $this->clienteId;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function getCompania(){
        return $this->compania;
    }

    //Setters
    public function setClienteId($clienteId){
        $this->clienteId =$clienteId;
    }

    public function setCelular($celular){
        $this->celular =$celular;
    }

    public function setCompania($compania){
        $this->compania =$compania;
    }

    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO clientes(celular,compania) 
            VALUES (:cel,:comp)");
            $stm->bindParam(":cel",$this->celular);
            $stm->bindParam(":comp",$this->compania);
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function getAll(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM clientes");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
    
    public function delete(){
        try {
            $stm = $this-> dbCnx -> prepare("DELETE FROM clientes WHERE clienteId = :id");
            $stm->bindParam(":id",$this->clienteId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
    
    public function selectOne(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM clientes WHERE clienteId = :id");
            $stm->bindParam(":id",$this->clienteId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function update(){
        try {
            $stm = $this-> dbCnx -> prepare("UPDATE clientes SET celular=:cel , compania=:comp 
            WHERE clienteId = :id");
            $stm->bindParam(":id",$this->clienteId);
            $stm->bindParam(":cel",$this->celular);
            $stm->bindParam(":comp",$this->compania);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
}
?>