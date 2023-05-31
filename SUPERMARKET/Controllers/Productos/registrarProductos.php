<?php
if(isset($_POST["guardar"])){
    require_once("../../Models/Productos.php");

    $config = new Productos();

    $config->setCategoriasId($_POST["categoriasId"]);
    $config->setPrecioUnitario($_POST["precioUnitario"]);
    $config->setStock($_POST["stock"]);
    $config->setUnidadesPedidas($_POST["unidadesPedidas"]);
    $config->setProveedorId($_POST["proveedorId"]);
    $config->setNombreProducto($_POST["nombreProducto"]);
    $config->setDescontinuado($_POST["descontinuado"]);
    
    $config->insertData();

    echo "
    <script> alert('Los datos fueron guardados exitosamente');
    document.location='../../Templates/Productos.php'
    </script>"; 
}
?>