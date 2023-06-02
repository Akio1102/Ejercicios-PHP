<?php
//  ini_set("display_errors", 1);

//  ini_set("display_startup_errors", 1);

//  error_reporting(E_ALL);

session_start();
if (isset($_POST["loguearse"])) {
    require_once("../../Models/Login.php");

    $credenciales = new Login();

    $credenciales->setEmail($_POST["email"]);
    $credenciales->setPassword($_POST["password"]);
    
    $login = $credenciales->login();
    
    if ($login) {
        header("Location: ../../Templates/Home.php");
    }else{
        echo "
        <script> alert('Password/Email Invalidos');
        document.location='../../Templates/Index.php'
        </script>";
    }

}
?>