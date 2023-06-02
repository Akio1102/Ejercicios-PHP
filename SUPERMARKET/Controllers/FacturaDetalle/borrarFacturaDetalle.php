<?php
require_once("../../Models/FacturasDetalle.php");

$record = new FacturasDetalle();

if (isset($_GET["facturaId"]) && isset($_GET["req"])) {
    if (isset($_GET["req"]) == "delete") {
        $record -> setfacturaId($_GET["facturaId"]);
        $record -> delete();
        echo "
        <script> alert('Los datos fueron borrados Exitosamente');
        document.location='../../Templates/FacturaDetalle.php'
        </script>";
    }
}
?>