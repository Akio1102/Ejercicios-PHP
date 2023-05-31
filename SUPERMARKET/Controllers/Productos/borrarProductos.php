<?php
require_once("../../Models/Productos.php");

$record = new Productos();

if (isset($_GET["productoId"]) && isset($_GET["req"])) {
    if (isset($_GET["req"]) == "delete") {
        $record -> setProductoId($_GET["productoId"]);
        $record -> delete();
        echo "
        <script> alert('Los datos fueron borrados Exitosamente');
        document.location='../../Templates/Productos.php'
        </script>";
    }
}
?>