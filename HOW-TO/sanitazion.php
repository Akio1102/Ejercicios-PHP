<?php
$codigo_script = "<script>alert('Hola, soy un script malicioso');</script>";

// echo $codigo_script;

$Ejemplo_sanatizacion = filter_var($codigo_script, FILTER_SANITIZE_STRING);

echo $Ejemplo_sanatizacion;
?>