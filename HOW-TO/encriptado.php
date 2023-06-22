<?php
$password = "123pep$*!";

$hash = password_hash($password, PASSWORD_DEFAULT, ["cost" => 10]);
echo $hash;

$login = "123";
if (password_verify($login,$hash)) {
    echo "<br> Contraseña Correcta";
}else{
    echo "<br> Contraseña Incorrecta";
}

?>