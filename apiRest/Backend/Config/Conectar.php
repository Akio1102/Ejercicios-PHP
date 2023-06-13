<?php
require_once("db.php");

abstract class Conectar{
    protected $dbCnx;

    public function __construct(){
        try {
            $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
            $this->dbCnx->query("SET NAMES 'utf8'");
        } catch (Exception $e) {
            return $e->getMessage();
            die;
        }
    }

    // public function set_names(){
    //     return 
    // }
}
?>