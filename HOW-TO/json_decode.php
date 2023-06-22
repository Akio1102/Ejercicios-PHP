<?php
$personas = '[
    {
    "Nombre": "Cristian",
    "Apellido": "Diaz",
    "Edad": 20
    },
    {
    "Nombre": "Jean",
    "Apellido": "Angarita",
    "Edad": 20
    }
]';

var_dump($personas);

echo "<br>";

$datosPHP = json_decode($personas);
var_dump($datosPHP);

echo "<br>";

foreach($datosPHP as $key => $value){
    foreach($value as $k => $v){
        echo $k . ": " . $v . "<br>"; // Mostramos cada clave y valor
    }
    echo "<br>";
}

$datosNew = [
    0 =>[
        "Nombre"=> "Cristian",
        "Apellido"=> "Diaz",
        "Edad"=> 20
    ],
    1 =>[
        "Nombre"=> "Jean",
        "Apellido"=> "Angarit",
        "Edad"=> 20
    ]
];

print_r($datosNew);
?>