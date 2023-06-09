<?php

require_once("Personas.php");

class Clientes extends Personas{
    
    protected $id_cliente;

    public function __construct($id_cliente= 0){
        $this->id_cliente = $id_cliente;
        parent::__construct();
    }
    
    //Getters
    public function getId_cliente(){
        return $this->id_cliente;
    }

    //Setters
    public function setId_cliente($id_cliente){
        $this->id_cliente =$id_cliente;
    }

    public function insert_Cliente(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO Clientes(idetificador_persona) VALUES (:ide_perso)");
            $stm->bindParam(":ide_perso",$this->id_persona);
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getAll_Cliente(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM Clientes");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function delete_Cliente(){
        try {
            $stm = $this-> dbCnx -> prepare("DELETE FROM Clientes WHERE id_cliente = :id");
            $stm->bindParam(":id",$this->id_cliente);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function selectOne(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM Clientes WHERE id_cliente = :id");
            $stm->bindParam(":id",$this->id_cliente);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update_Cliente(){
        try {
            $stm = $this-> dbCnx -> prepare("UPDATE Clientes SET idetificador_persona=:id_per WHERE id_cliente = :id");
            $stm->bindParam(":id",$this->id_cliente);
            $stm->bindParam(":id_per",$this->id_persona);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
$xd2 = new Clientes();
print_r($xd2);
?>