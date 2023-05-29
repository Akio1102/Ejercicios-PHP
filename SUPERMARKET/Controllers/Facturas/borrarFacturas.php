<?php
require_once("../../Models/Proveedores.php");

$record = new Proveedores();

if (isset($_GET["proveedorId"]) && isset($_GET["req"])) {
    if (isset($_GET["req"]) == "delete") {
        $record -> setProveedorId($_GET["proveedorId"]);
        $record -> delete();
        echo "
        <script> alert('Los datos fueron borrados Exitosamente');
        document.location='../../Templates/Proveedores.php'
        </script>";
    }
}
?>