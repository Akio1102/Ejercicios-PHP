<?php
session_start();

// $_SESSION["user"] = "Akio";
// $_SESSION["password"] = 123;

// $user = "Akio";
// $pass = 123;
echo "El usuario es: {$_SESSION['user']}<br>La contraseña es: {$_SESSION['password']}<br>";
echo "Ahora el Usuario es: {$user}<br>Ahora La contraseña es: {$pass}";
?>