<?php
if(isset($_POST["guardar"])){
    require_once("../../Models/Empleados.php");

    $config = new Empleados();

    $config->setEmpleado_nombre($_POST["empleado_nombre"]);
    $config->setCelular($_POST["celular"]);
    $config->setDireccion($_POST["direccion"]);
    $config->setImagen($_POST["imagen"]);

    $config->insertData();

    echo "
    <script> alert('Los datos fueron guardados exitosamente');
    document.location='../../Templates/Empleados.php'
    </script>"; 
}
?>