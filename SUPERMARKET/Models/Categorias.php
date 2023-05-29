<?php

require_once("Pdo.php");

class Categorias extends ConexiónPdo{
    
    private $categoriasId;
    private $nombre;
    private $descripcion;
    private $imagen;

    public function __construct($categoriasId= 0, $nombre= "", $descripcion="", $imagen=""){
        $this->categoriasId = $categoriasId;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
        parent::__construct();
    }
    
    //Getters
    public function getCategoriasId(){
        return $this->categoriasId;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getImagen(){
        return $this->imagen;
    }

    //Setters
    public function setCategoriasId($categoriasId){
        $this->categoriasId =$categoriasId;
    }

    public function setNombre($nombre){
        $this->nombre =$nombre;
    }

    public function setDescripcion($descripcion){
        $this->descripcion =$descripcion;
    }

    public function setImagen($imagen){
        $this->imagen =$imagen;
    }

    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO categorias(nombre,descripcion,imagen) 
            VALUES (:nomb,:descr,:img)");
            $stm->bindParam(":nomb",$this->nombre);
            $stm->bindParam(":descr",$this->descripcion);
            $stm->bindParam(":img",$this->imagen);
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function getAll(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM categorias");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
    
    public function delete(){
        try {
            $stm = $this-> dbCnx -> prepare("DELETE FROM categorias WHERE categoriasId = :id");
            $stm->bindParam(":id",$this->categoriasId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
    
    public function selectOne(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM categorias WHERE categoriasId = :id");
            $stm->bindParam(":id",$this->categoriasId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function update(){
        try {
            $stm = $this-> dbCnx -> prepare("UPDATE categorias SET nombre=:nomb , descripcion=:descr , imagen=:img
            WHERE categoriasId = :id");
            $stm->bindParam(":id",$this->categoriasId);
            $stm->bindParam(":nomb",$this->nombre);
            $stm->bindParam(":descr",$this->descripcion);
            $stm->bindParam(":img",$this->imagen);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }
}
?>