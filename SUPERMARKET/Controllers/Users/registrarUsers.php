<?php
if (isset($_POST["registrarse"])) {
    require_once("../../Models/Users.php");

    $registrar = new Users();

    $registrar->setId_Empleado($_POST["id_Empleado"]);
    $registrar->setEmail($_POST["email"]);
    $registrar->setUsername($_POST["username"]);
    $registrar->setPassword($_POST["password"]);

    if ($registrar->checkUser($_POST["email"])) {
        echo "
        <script> alert('Usuario ya Existe, Logearse porfavor');
        document.location='../../Templates/Index.php'
        </script>"; 
    }else{
        $registrar->insertData();
        echo "
        <script> alert('Usuario Registrado Exitosamente');
        document.location='../../Templates/Home.php'
        </script>"; 
    }
}
?>