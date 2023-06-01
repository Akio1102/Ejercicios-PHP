<?php
if (isset($_POST["registrarse"])) {
    require_once("../../Models/Users.php");

    $registrar = new Users();

    $registrar->setId_Empleado(1);
    $registrar->setEmail($_POST["email"]);
    $registrar->setUsername($_POST["username"]);
    $registrar->setPassword($_POST["password"]);

    $registrar->insertData();

    echo "
    <script> alert('Los datos fueron guardados exitosamente');
    document.location='../../Templates/Login.php'
    </script>"; 
}
?>