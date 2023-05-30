<?php
if(isset($_POST["guardar"])){
    require_once("../../Models/Facturas.php");

    $config = new Facturas();

    $config->setEmpleadoId($_POST["empleadoId"]);
    $config->setClienteId($_POST["clienteId"]);
    $config->setFecha($_POST["fecha"]);
    
    $config->insertData();

    echo "
    <script> alert('Los datos fueron guardados exitosamente');
    document.location='../../Templates/Facturas.php'
    </script>"; 
}
?>