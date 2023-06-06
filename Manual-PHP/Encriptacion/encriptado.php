<?php
$password = "123pep$*!";

echo md5($password);

//Imprime todo los metodos de Encriptado que existen en PHP
/* foreach (hash_algos() as $algo) {
    echo $algo . " = " . hash($algo,$password) . "<br/>";
} */

echo "<br/>";

echo password_hash($password, PASSWORD_DEFAULT, ["cost" => 10]);

?>