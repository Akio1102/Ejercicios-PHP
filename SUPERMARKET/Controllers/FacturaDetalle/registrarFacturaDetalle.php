<?php
if(isset($_POST["guardar"])){
    require_once("../../Models/FacturasDetalle.php");

    $config = new FacturasDetalle();

    $config->setFacturaId($_POST["facturaId"]);
    $config->setProductoId($_POST["productoId"]);
    $config->setCantidad($_POST["cantidad"]);
    $config->setPrecioVenta($_POST["precioVenta"]);
    
    $config->insertData();

    echo "
    <script> alert('Los datos fueron guardados exitosamente');
    document.location='../../Templates/FacturaDetalle.php'
    </script>"; 
}
?>