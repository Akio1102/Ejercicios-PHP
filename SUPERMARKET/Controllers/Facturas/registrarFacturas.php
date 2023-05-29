<?php
if(isset($_POST["guardar"])){
    require_once("../../Models/Proveedores.php");

    $config = new Proveedores();

    $config->setNombre($_POST["nombre"]);
    $config->setTelefono($_POST["telefono"]);
    $config->setCiudad($_POST["ciudad"]);
    
    $config->insertData();

    echo "
    <script> alert('Los datos fueron guardados exitosamente');
    document.location='../../Templates/Proveedores.php'
    </script>"; 
}
?>