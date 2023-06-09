<?php
if(isset($_POST["registrar"])){
    require_once(__DIR__. "/../../Models/Personas.php");

    $personas = new Personas();
    $personas->setNombre($_POST["nombre"]);
    $personas->seTtelefono($_POST["telefono"]);
    $personas->setSexo($_POST["sexo"]);
    $personas->setDireccion($_POST["direccion"]);

    $personas->insert_Personas();

    echo "
    <script>
    document.location='../../../FRONTEND/index.html'
    </script>";
}
?>