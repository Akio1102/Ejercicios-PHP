<?php
    session_start();
    if (isset($_POST["loguearse"])) {
    require_once("./LoginUser.php");

    $credenciales = new LoginUser();

    $credenciales->setEmail($_POST["email"]);
    $credenciales->setPassword($_POST["password"]);
    
    $login = $credenciales->login();
    
    if ($login) {
        header("Location: ../Home/home.php");
    }else{

    }

    echo "
    <script> alert('Password/Email Invalidos');
    document.location='./loginRegister.php'
    </script>";
}
?>