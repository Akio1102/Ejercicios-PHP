<?php
// Declarar variable numerica
$num = 1;

// Declarar variable de texto
$nombre = "cristian";

// Declarar variable boolean
$boolean = true;

echo "Variables: <br/>";
echo var_dump($num)."<br/>";
echo var_dump($nombre)."<br/>";
echo var_dump($boolean)."<br/>";

// Declarar constante numerica
define("NUMERO", 2020);

// Declarar constante de texto
define("APELLIDO", "Diaz");

// Declarar constante boolean
define("ES_VERDADERO", true);

echo "Constates: <br/>";
echo var_dump(NUMERO)."<br/>";
echo var_dump(APELLIDO)."<br/>";
echo var_dump(ES_VERDADERO);

?>
