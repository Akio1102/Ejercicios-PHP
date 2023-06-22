<?php
$dato = "Hola Mundo";
echo "Ejemplo de strlen: " . strlen($dato) . "<br>";

$dato2 = "Ejemplo uso de strpos()";
echo "Ejemplo de strpos: " . strpos($dato2, "uso") . "<br>";

$dato3 = "Me especializo en BackEnd";
echo "{$dato3} <br>";
echo "Ejemplo de str_replace(): " . str_replace("BackEnd", "FullStack", $dato3) . "<br>";

$dato4 = "Ejemplo uso de StrToLower()";
echo "{$dato4} <br>";
echo "Ejemplo de strtolower(): " . strtolower($dato4) . "<br>";

$dato5 = "Ejemplo uso de StrToUpper()";
echo "Ejemplo de strtoupper(): " . strtoupper($dato5) . "<br>";

$dato6 = "Ejemplo uso de substr()";
echo "Ejemplo de substr(): " . substr($dato6, 6) . "<br>";
?>