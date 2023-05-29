<?php
require_once("../../Models/Empleados.php");

$record = new Empleados();

if (isset($_GET["empleadoId"]) && isset($_GET["req"])) {
    if (isset($_GET["req"]) == "delete") {
        $record -> setEmpleadoId($_GET["empleadoId"]);
        $record -> delete();
        echo "
        <script> alert('Los datos fueron borrados Exitosamente');
        document.location='../../Templates/Empleados.php'
        </script>";
    }
}
?>