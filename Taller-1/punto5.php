<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 1 Punto 5</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <div class="container-fluid">
      <form class="mt-3" action="punto5.php" method="POST">
        <div class="mb-3">
        <label for="number1" class="form-label">Ingrese el 1 Numéro</label>
        <input
          type="number"
          class="form-control"
          id="number1"
          name="number1"
          placeholder="Ingrese el 1 Numéro"
          required
        />
        </div>
        <div class="mb-3">
        <label for="number2" class="form-label">Ingrese el 2 Numéro</label>
        <input
          type="number"
          class="form-control"
          id="number2"
          name="number2"
          placeholder="Ingrese el 2 Numéro"
          required
        />
        </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
    <div class="container-fluid my-3">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-dark"><a href="./punto1.php" class="text-light">Ejercicio 1</a></button>
            <button type="button" class="btn btn-dark"><a href="./punto2.php" class="text-light">Ejercicio 2</a></button>
            <button type="button" class="btn btn-dark"><a href="./punto3.php" class="text-light">Ejercicio 3</a></button>
            <button type="button" class="btn btn-dark"><a href="./punto4.php" class="text-light">Ejercicio 4</a></button>
            <button type="button" class="btn btn-dark"><a href="./punto5.php" class="text-light">Ejercicio 5</a></button>
            <button type="button" class="btn btn-dark"><a href="./punto6.php" class="text-light">Ejercicio 6</a></button>
            <button type="button" class="btn btn-dark"><a href="./punto7.php" class="text-light">Ejercicio 7</a></button>
            <button type="button" class="btn btn-dark"><a href="./punto8.php" class="text-light">Ejercicio 8</a></button>
            <button type="button" class="btn btn-dark"><a href="./punto9.php" class="text-light">Ejercicio 9</a></button>
            <button type="button" class="btn btn-dark"><a href="./punto10.php" class="text-light">Ejercicio 10</a></button>
        </div>
    </div>
</body>
</html>
<?php 
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    if ($number1 > $number2) {      
      $suma = $number1 + $number2;
      $diferencia = $number1 - $number2;
      echo "La Suma de los 2 Numeros es {$suma} y su Diferencia es {$diferencia}";
    }else if($number2 > $number1){
      $producto = $number1 * $number2;
      $division = $number1 / $number2;
      echo "El Producto de los 2 Numeros es {$producto} y su Division es {$division}";      
    }else{
      echo "Los 2 Números son {$number1}";            
    }
?>