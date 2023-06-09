<?php
if(isset($_POST["guardar"])){
    require_once("../../Models/Categorias.php");

    $config = new Categorias();

    $config->setCategorias_nombre($_POST["categorias_nombre"]);
    $config->setDescripcion($_POST["descripcion"]);
    $config->setImagen($_POST["imagen"]);

    $config->insertData();

    echo "
    <script> alert('Los datos fueron guardados exitosamente');
    document.location='../../Templates/Categorias.php'
    </script>"; 
}
?>