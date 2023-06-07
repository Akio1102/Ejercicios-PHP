<?php
// Crear un array con [] o tambien array()
$arreglo = ["Pepito","Mano","Pana"];

//Imprimir Arrar
echo "<pre>". var_dump($arreglo) ."</pre>";

//Acceder a un elemento del array
echo $arreglo[1]."<br/>";

//Añadir un elemento en una posicion en especifico
$arreglo[3] = "Sara";

//Añadir un elemento al final del array
array_push($arreglo,"Sofia");

//Añadir un elemento al inicio del array
array_unshift($arreglo,"Marta");

//Imprimir Arrar
echo "<pre>". var_dump($arreglo) ."</pre>";

echo "La funcion count() devuelve el número de elementos en un array ". count($arreglo) . "<br/>";
echo "La funcion array_pop() elimina y devuelve el último elemento de un array ". array_pop($arreglo) . "<br/>";
echo "La funcion array_shift() elimina y devuelve el primer elemento de un array ". array_shift($arreglo) . "<br/>";
$arr1 = [2,3,4];
echo "La funcion array_unshift() añade uno o más elementos al principio de un array y devuelve el ultimo indice ". array_unshift($arr1,1) . "<br/>";
$arr2 = [5,6,7];
$arr =array_merge($arr1,$arr2);
echo "La funcion array_merge() combina dos o más arrays en uno solo <br/>";
$porcion = array_slice($arr,1,3);
echo "La funcion array_slice() devuelve una porción del array ". print_r($porcion) . "<br/>";
$arr3 = [40,50,3,5,7,9,10];
sort($arr3);
echo "La funcion array_slice() devuelve una porción del array ". print_r($arr3) . "<br/>";
$comprobar = array_key_exists(3,$arreglo);
echo "La funcion array_key_exists() devuelve true si la clave está presente en el array y false en caso contrario ". var_dump($comprobar) . "<br/>";

//Creación de Array Asociacitov
$array_asociativo = [
    "Juan" => 20,
    "Jesus" => 25,
    "Miguel" => 23
];

foreach ($array_asociativo as $key => $value) {
    echo "Clave: $key , Valor: $value<br/>";
}

$trabajador = [
    "nombre" => "Rosa",
    "saldo" => 300,
    "informacion" => [
        "tipo" => "Jefe",
        "Horario" => "6 a 9"
    ]
];

echo "<pre>". var_dump($trabajador['informacion']) . "<pre/>";
$trabajador["vacaciones"] = false;
echo "<pre>". var_dump($trabajador) . "<pre/>";

$mascotas = ["Gato","Loro","Perro"];

//Busca un elmento en un Array 
var_dump(in_array("Perro", $mascotas));
var_dump(in_array("Pez", $mascotas));

$numeros = [12,35,7,23,6];

//Ordenamiento elementos de un Array
sort($numeros); // De menor a Mayor
echo "<pre>". var_dump($numeros) . "<pre/>";
rsort($numeros); // De Mayor a Menor
echo "<pre>". var_dump($numeros) . "<pre/>";

$student = [
    "nombre" => "Cristian",
    "curso" => "V2",
    "skills" => [
        "Frontend" => 10,
        "Backend" => 10
    ],
    "edad" => 20

];

echo "<pre>". var_dump($student) . "<pre/>";
asort($numeros); // Ordena por valores (Orden Alfabetico)
echo "<pre>". var_dump($student) . "<pre/>";
arsort($numeros); // Ordena por valores (Z Alfabetico)
echo "<pre>". var_dump($student) . "<pre/>";
ksort($numeros); // Ordena por Key (Orden Alfabetico)
echo "<pre>". var_dump($student) . "<pre/>";
krsort($numeros); // Ordena por Key (Orden Alfabetico, De Z a a A)
echo "<pre>". var_dump($student) . "<pre/>";
?>