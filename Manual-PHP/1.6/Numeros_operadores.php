<?php
/* 1. Operadores aritmeticos  

+ = Suma
- = Resta
* = Multiplicación  
/ = División   
% = Diferencia  
** = Exponenciación   

2. Operadores de asignación  
= Igual a    

3. Operadores de array 

== Igual a 
=== Identico a 
!= Diferente a 
!== No identico  
<> No igual a
< Menor que 
<= Menor o igual que  
> Mayor que  
>= Mayor o igual que 
<=> Operador Spaceship   

4. Operador logico 

&& = and var_dump($numero1 <=> $numero2)
|| = or
! = not 
  

5. Operadores de incremento y decremento
++$a = Pre-incremento
$a++ = Post-incremento 
--$a = Pre-decremento 
$a-- = Post-decremento  */

$num1 =20;
$num2 =10;
$num3 =10;
$num4 ="10";

echo var_dump($num1 > $num2)."<br/>"; 
echo var_dump($num1 < $num2)."<br/>";
echo var_dump($num1 >= $num2)."<br/>"; 
echo var_dump($num1 <= $num2)."<br/>";
echo var_dump($num1 == $num2)."<br/>";
echo var_dump($num2 == $num3)."<br/>";
echo var_dump($num3 == $num4)."<br/>";
echo var_dump($num2 === $num4)."<br/>"; 

/*
El operador Spaceship  devuelve 
-1 Si el valor de la izquierda es menor, 
0 Si es igual,
1 Si el valor de la derecha es mayor 
*/

echo var_dump($num2 <=> $num1)."<br/>";
echo var_dump($num2 <=> $num3)."<br/>";
echo var_dump($num1 <=> $num2)."<br/>";

$nombre = "Cristian Diaz";

//Devuelve la cantidad de caracteres de el string
echo strlen($nombre) . var_dump($nombre)."<br/>";

//Elimina Espacios en blaco
$texto = trim($nombre);
echo strlen($texto) . var_dump($texto) ."<br/>";

//Convierte a mayusculas
echo strtoupper($texto) ."<br/>";

//Convierte a minuscula
echo strtolower($texto) ."<br/>";

$texto2 = "Hola Universo";

//Reemplarzar todas las ocurrencias
echo str_replace("Universo","Mundo",$texto2) ."<br/>";

//Revisa si un string existe, si existe devuelve donde se encuentra
echo strpos($texto2,"Universo") ."<br/>";
?>