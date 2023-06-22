<?php
setcookie("EjemploCookie", "Hola mundo");
setcookie("EjemploCookie2", "Learning Cookies PHP", time()+ 3600);
setcookie("EjemploCookie3", "Cookie expiracion con Fecha", strtotime("2023-12-31 23:59:59"));

echo "Mi Primera Cookies es: ". $_COOKIE["EjemploCookie"];
echo "<br><br-----------------------------------<br><br>";
echo "Mi Segunda Cookies es: ". $_COOKIE["EjemploCookie2"];
echo "<br><br-----------------------------------<br><br>";
echo "Mi Tercera Cookies es: ". $_COOKIE["EjemploCookie3"];
?>
