<?php
// ini_set("display_errors", 1);

// ini_set("display_startup_errors", 1);

// error_reporting(E_ALL);

require_once("db.php");

class Config{
    private $id;
    private $nombres;
    private $direccion;
    private $logros;
    private $ser;
    private $ingles;
    private $skill;
    private $asistencia;
    private $especialidad;
    protected $dbCnx;


    public function __construct($id = 0,$nombres= "",$direccion= "", $logros="", $ser = 0, $ingles="",$skill = "" ,$asistencia="",$especialidad="" ){
        $this->id = $id;
        $this->nombres = $nombres;
        $this->direccion = $direccion;
        $this->logros = $logros;
        $this->ser = $ser;
        $this->ingles = $ingles;
        $this->skill = $skill;
        $this->asistencia = $asistencia;
        $this->especialidad = $especialidad;
        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    //Getters
    public function getId(){
      return $this->id;
    }

    public function getNombres(){
      return $this->nombres;
    }

    public function getDireccion(){
      return $this->direccion;
    }

    public function getLogros(){
      return $this->logros;
    }

    public function getSer(){
      return $this->ser;
    }

    public function getIngles(){
      return $this->ingles;
    }

    public function getSkill(){
      return $this->skill;
    }

    public function getAsistencia(){
      return $this->asistencia;
    }

    public function getEspecialidad(){
      return $this->especialidad;
    } 


    //Setters
    public function setId($id){
      $this->id = $id;
    }

    public function setNombres($nombres){
      $this->nombres = $nombres;
    }

    public function setDireccion($direccion){
      $this->direccion = $direccion;
    }

    public function setLogros($logros){
      $this->logros = $logros;
    }

    public function setSer($ser){
      $this->ser = $ser;
    }

    public function setIngles($ingles){
      $this->ingles = $ingles;
    }

    public function setSkill($skill){
      $this->skill = $skill;
    }

    public function setAsistencia($asistencia){
      $this->asistencia = $asistencia;
    }

    public function setEspecialidad($especialidad){
      $this->especialidad = $especialidad;
    }

    public function insertData(){
        try {
          $stm = $this-> dbCnx -> prepare("INSERT INTO camper(nombres,direccion,logros,ser,ingles,skill,asistencia,especialidad) 
          VALUES (:nomb,:dire,:logo,:se,:ing,:ski,:asis,:espe)");
            $stm->bindParam(":nomb",$this->nombres);
            $stm->bindParam(":dire",$this->direccion);
            $stm->bindParam(":logo",$this->logros);
            $stm->bindParam(":se",$this->ser);
            $stm->bindParam(":ing",$this->ingles);
            $stm->bindParam(":ski",$this->skill);
            $stm->bindParam(":asis",$this->asistencia);
            $stm->bindParam(":espe",$this->especialidad);
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function getAll(){
      try {
        $stm = $this-> dbCnx -> prepare("SELECT * FROM camper");
        $stm -> execute();
        return $stm -> fetchAll();
      } catch (Exception $e) {
        return $e->getMessages();
      }
    }
    
    public function delete(){
      try {
        $stm = $this-> dbCnx -> prepare("DELETE FROM camper WHERE id= :id");
        $stm->bindParam(":id",$this->id);
        $stm -> execute();
        return $stm -> fetchAll();
      } catch (Exception $e) {
        return $e->getMessages();
      }
    }
    
    public function selectOne(){
      try {
        $stm = $this-> dbCnx -> prepare("SELECT * FROM camper WHERE id= :id");
        $stm->bindParam(":id",$this->id);
        $stm -> execute();
        return $stm -> fetchAll();
      } catch (Exception $e) {
        return $e->getMessages();
      }
    }

    public function update(){
      try {
        $stm = $this-> dbCnx -> prepare("UPDATE camper SET nombres = :nomb , direccion = :dire , logros = :logo , ser = :se , ingles = :ing , skill = :ski , asistencia = :asis , especialidad = :espe WHERE id = :id");
          $stm->bindParam(":id",$this->id);
          $stm->bindParam(":nomb",$this->nombres);
          $stm->bindParam(":dire",$this->direccion);
          $stm->bindParam(":logo",$this->logros);
          $stm->bindParam(":se",$this->ser);
          $stm->bindParam(":ing",$this->ingles);
          $stm->bindParam(":ski",$this->skill);
          $stm->bindParam(":asis",$this->asistencia);
          $stm->bindParam(":espe",$this->especialidad);
        $stm -> execute();
        return $stm -> fetchAll();
      } catch (Exception $e) {
        return $e->getMessages();
      }
    }
}
?>