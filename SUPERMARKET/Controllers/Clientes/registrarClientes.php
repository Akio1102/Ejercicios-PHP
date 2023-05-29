<?php
if(isset($_POST["guardar"])){
    require_once("../../Models/Clientes.php");

    $config = new Clientes();

    $config->setNombre($_POST["nombre"]);
    $config->setCelular($_POST["celular"]);
    $config->setCompania($_POST["compania"]);

    $config->insertData();

    echo "
    <script> alert('Los datos fueron guardados exitosamente');
    document.location='../../Templates/Clientes.php'
    </script>"; 
}
?>