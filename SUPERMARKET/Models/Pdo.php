<?php

require_once(__DIR__ . '/../Database/Db.php');

class ConexiónPdo{
    protected $dbCnx;
    public function __construct(){
         $this->dbCnx = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
}
?>