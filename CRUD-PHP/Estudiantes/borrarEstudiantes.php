<?php

require_once("./Estudiante.php");

$record = new Estudiante();

if (isset($_GET["id"]) && isset($_GET["req"])) {
    if (isset($_GET["req"]) == "delete") {
        $record -> setId($_GET["id"]);
        $record -> delete();
        echo "
        <script> alert('Los datos fueron borrados Exitosamente');
        document.location='estudiantes.php'
        </script>";
    }
}
?>