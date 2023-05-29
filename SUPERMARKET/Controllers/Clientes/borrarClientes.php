<?php
require_once("../../Models/Clientes.php");

$record = new Clientes();

if (isset($_GET["clienteId"]) && isset($_GET["req"])) {
    if (isset($_GET["req"]) == "delete") {
        $record -> setClienteId($_GET["clienteId"]);
        $record -> delete();
        echo "
        <script> alert('Los datos fueron borrados Exitosamente');
        document.location='../../Templates/Clientes.php'
        </script>";
    }
}
?>