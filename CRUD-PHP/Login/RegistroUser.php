<?php
// ini_set("display_errors", 1);

// ini_set("display_startup_errors", 1);

// error_reporting(E_ALL);

require_once("../Config/Conectar.php");

class RegistroUser  extends Conectar{

    private $id;
    private $idCamper;
    private $email;
    private $username;
    private $password;


    public function __construct($id = 0,$idCamper=0,$email="",$username= "", $password = ""){
        $this->id = $id;
        $this->idCamper = $idCamper;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        parent::__construct();
    }

    //Getters
    public function getId(){
      return $this->id;
    }

    public function getIdCamper(){
      return $this->idCamper;
    }

    public function getEmail(){
      return $this->email;
    }

    public function getUsername(){
      return $this->username;
    }


    public function getPassword(){
      return $this->password;
    }

    //Setters
    public function setId($id){
      $this->id = $id;
    }

    public function setIdCamper($idCamper){
      $this->idCamper = $idCamper;
    }

    public function setEmail($email){
      $this->email = $email;
    }

    public function setUsername($username){
      $this->username = $username;
    }

    public function setPassword($password){
      $this->password = $password;
    }

    public function checkUser(){
      try {
        $stm = $this-> dbCnx -> prepare("SELECT * FROM users WHERE email=:email");
        $stm->bindParam(":email",$this->email);
        $stm -> execute();
        if ($stm->fetchColumn()) {
          return true;
        }else{
          return false;
        }
      } catch (Exception $e) {
        return $e->getMessages();
      }
    }

    public function insertData(){
        try {
          $stm = $this-> dbCnx -> prepare("INSERT INTO users(idCamper,email,username,password) 
          VALUES (:idCamper,:email,:user,:pass)");
            $stm->bindParam(":idCamper",$this->idCamper);
            $stm->bindParam(":email",$this->email);
            $stm->bindParam(":user",$this->username);
            $stm->bindParam(":pass", md5($this->password));
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessages();
        }
    }

    public function getAll(){
      try {
        $stm = $this-> dbCnx -> prepare("SELECT * FROM users");
        $stm -> execute();
        return $stm -> fetchAll();
      } catch (Exception $e) {
        return $e->getMessages();
      }
    }
    
    public function delete(){
      try {
        $stm = $this-> dbCnx -> prepare("DELETE FROM users WHERE id= :id");
        $stm->bindParam(":id",$this->id);
        $stm -> execute();
        return $stm -> fetchAll();
      } catch (Exception $e) {
        return $e->getMessages();
      }
    }
    
    public function selectOne(){
      try {
        $stm = $this-> dbCnx -> prepare("SELECT * FROM users WHERE id= :id");
        $stm->bindParam(":id",$this->id);
        $stm -> execute();
        return $stm -> fetchAll();
      } catch (Exception $e) {
        return $e->getMessages();
      }
    }

    public function update(){
      try {
        $stm = $this-> dbCnx -> prepare("UPDATE users SET idCamper = :idCamper , email = :email , username = :user , password = :pass WHERE id = :id");
        $stm->bindParam(":id",$this->id);
        $stm->bindParam(":idCamper",$this->idCamper);
        $stm->bindParam(":email",$this->email);
        $stm->bindParam(":user",$this->username);
        $stm->bindParam(":pass",$this->password);
        $stm -> execute();
        return $stm -> fetchAll();
      } catch (Exception $e) {
        return $e->getMessages();
      }
    }
}
?>