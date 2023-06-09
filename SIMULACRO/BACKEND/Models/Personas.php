<?php

require_once("Pdo.php");

class Personas extends ConexionPdo{
    
    protected $id_persona;
    protected $nombre;
    protected $telefono;
    protected $sexo;
    protected $direccion;

    public function __construct($id_persona= 0, $nombre="",$telefono= 0, $sexo=0,$direccion=""){
        $this->id_persona = $id_persona;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->sexo = $sexo;
        $this->direccion = $direccion;
        parent::__construct();
    }
    
    //Getters
    public function getId_persona(){
        return $this->id_persona;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    //Setters
    public function setId_persona($id_persona){
        $this->id_persona =$id_persona;
    }

    public function setNombre($nombre){
        $this->nombre =$nombre;
    }

    public function seTtelefono($telefono){
        $this->telefono =$telefono;
    }

    public function setSexo($sexo){
        $this->sexo =$sexo;
    }

    public function setDireccion($direccion){
        $this->direccion =$direccion;
    }

    public function insert_Personas(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO Personas(nombre,telefono,sexo,direccion) VALUES (:nom,:tel,:sex,:dire)");
            $stm->bindParam(":nom",$this->nombre);
            $stm->bindParam(":tel",$this->telefono);
            $stm->bindParam(":sex",$this->sexo);
            $stm->bindParam(":dire",$this->direccion);
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function get_Personas(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM Personas");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function delete_Personas(){
        try {
            $stm = $this-> dbCnx -> prepare("DELETE FROM Personas WHERE id_persona = :id");
            $stm->bindParam(":id",$this->id_persona);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
/*     public function selectOne(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM Personas WHERE id_persona = :id");
            $stm->bindParam(":id",$this->id_persona);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
 */
    public function update_Personas(){
        try {
            $stm = $this-> dbCnx -> prepare("UPDATE Personas SET nombre=:nom ,telefono=:tel , sexo=:sex , direccion=:dire
            WHERE id_persona = :id");
            $stm->bindParam(":id",$this->id_persona);
            $stm->bindParam(":nom",$this->nombre);
            $stm->bindParam(":tel",$this->telefono);
            $stm->bindParam(":sex",$this->sexo);
            $stm->bindParam(":dire",$this->direccion);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
/* $xd = new Personas();
print_r($xd); */
?>