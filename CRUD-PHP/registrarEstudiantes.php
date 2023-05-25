<?php
if(isset($_POST["guardar"])){
    require_once("config.php");

    $config = new Config();

    $config->setNombres($_POST["nombres"]);
    $config->setDireccion($_POST["direccion"]);
    $config->setLogros($_POST["logros"]);
    $config->setSer($_POST["ser"]);
    $config->setIngles($_POST["ingles"]);
    $config->setSkill($_POST["skill"]);
    $config->setAsistencia($_POST["asistencia"]);
    $config->setEspecialidad($_POST["especialidad"]);     


    $config->insertData();

    echo "
    <script> alert('Los datos fueron guardados exitosamente');
    document.location='estudiantes.php'
    </script>"; 
}
?>