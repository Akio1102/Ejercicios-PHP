<?php
require_once(__DIR__. "/../../Models/Personas.php");

$record = new Categorias();

if (isset($_GET["categoriasId"]) && isset($_GET["req"])) {
    if (isset($_GET["req"]) == "delete") {
        $record -> setCategoriasId($_GET["categoriasId"]);
        $record -> delete();
        echo "
        <script> alert('Los datos fueron borrados Exitosamente');
        document.location='../../Templates/Categorias.php'
        </script>";
    }
}
?>