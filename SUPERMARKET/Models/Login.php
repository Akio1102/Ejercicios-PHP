<?php

require_once("Pdo.php");

class Login extends ConexiónPdo{

    private $id;
    private $email;
    private $password;

    public function __construct($id = 0,$email="", $password = ""){
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        parent::__construct();
    }

    //Getters
    public function getId(){
      return $this->id;
    }

    public function getEmail(){
      return $this->email;
    }

    public function getPassword(){
      return $this->password;
    }

    //Setters
    public function setId($id){
      $this->id = $id;
    }

    public function setEmail($email){
      $this->email = $email;
    }

    public function setPassword($password){
      $this->password = $password;
    }

    public function fetchAll(){
      try {
        $stm = $this-> dbCnx -> prepare("SELECT * FROM users");
        $stm -> execute();
        return $stm -> fetchAll();
      } catch (Exception $e) {
        return $e->getMessages();
      }
    }
    
    public function login(){
      try {
        $stm = $this-> dbCnx -> prepare("SELECT * FROM users WHERE email=:email AND password=:password");
        $stm->bindParam(":email",$this->email);
        $stm->bindParam(":password",md5($this->password));
        $stm->execute();
        $user = $stm -> fetchAll();
        if (count($user)>0) {
            session_start();
            $_SESSION["id"] = $user[0]["id"];
            $_SESSION["email"] = $user[0]["email"];
            $_SESSION["password"] = $user[0]["password"];
            return true;
        }else{
            false;
        }
      } catch (Exception $e) {
        return $e->getMessages();
      }
    }
}
?>