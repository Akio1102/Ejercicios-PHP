<?php
$estudiantes = [
    ["nombre"=> "Cristian", "edad"=>20],
    ["nombre"=> "Mauricio", "edad"=>21],
    ["nombre"=> "Jean", "edad"=>20],
    ["nombre"=> "Karen", "edad"=>17],
    ["nombre"=> "Julian", "edad"=>19],
    ["nombre"=> "Nicolas", "edad"=>19]
];

$estudiantes_menores = array_filter($estudiantes,function($estudiantes){
    return $estudiantes["edad"] < 18;
});

print_r($estudiantes_menores);
?>