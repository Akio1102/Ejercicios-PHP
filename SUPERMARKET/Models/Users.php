<?php

require_once("Pdo.php");
require_once("Login.php");

class Users extends ConexiónPdo{
    
    private $id;
    private $id_Empleado;
    private $email;
    private $username;
    private $password;

    public function __construct($id= 0, $id_Empleado= 0, $email="", $username="",$password=""){
        $this->id = $id;
        $this->id_Empleado = $id_Empleado;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        parent::__construct();
    }
    
    //Getters
    public function getId(){
        return $this->id;
    }

    public function getId_Empleado(){
        return $this->id_Empleado;
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
        $this->id =$id;
    }

    public function setId_Empleado($id_Empleado){
        $this->id_Empleado =$id_Empleado;
    }

    public function setEmail($email){
        $this->email =$email;
    }

    public function setUsername($username){
        $this->username =$username;
    }

    public function setPassword($password){
        $this->password =$password;
    }

    public function checkUser($email){
      try {
        $stm = $this-> dbCnx -> prepare("SELECT * FROM users WHERE email='$email'");
        $stm -> execute();
        if ($stm->fetchColumn()) {
          return true;
        }else{
          return false;
        }
      } catch (Exception $e) {
        return $e->getMessage();
      }
    }

    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO users(id_Empleado,email,username,password) 
            VALUES (:idEmpl,:ema,:user,:pass)");
            $stm->bindParam(":idEmpl",$this->id_Empleado);
            $stm->bindParam(":ema",$this->email);
            $stm->bindParam(":user",$this->username);
            $stm->bindParam(":pass",md5($this->password));
            $stm->execute();

            $login = new Login();

            $login->setEmail($_POST["email"]);
            $login->setPassword($_POST["password"]);

            $success = $login->login();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getAll(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM users");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>