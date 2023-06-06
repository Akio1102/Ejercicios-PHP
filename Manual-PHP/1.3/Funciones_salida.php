<?php
echo "Texto Impreso con la función echo";

echo "<br/>";
$text = "una cadena de caracteres";

printf("Esto %s",$text);

echo "<br/>";
$text2 = "una 2 cadena de caracteres";

$mensaje = sprintf("Esto %s",$text2);
echo $mensaje;
?>
