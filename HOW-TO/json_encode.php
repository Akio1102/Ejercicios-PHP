<?php
$persona =[
    "Nombre" => "Cristian",
    "Apellido" => "Diaz",
    "Edad" => 20
];

var_dump($persona);

echo "<br>";

$json = json_encode($persona);
var_dump($json);
?>