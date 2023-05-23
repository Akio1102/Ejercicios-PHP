<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 1 Punto 1</title>
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
      <form class="mt-3" action="punto1.php" method="POST">
        <div class="mb-3">
        <label for="name" class="form-label">Digitar la Nombre del 1 Estudiante</label>
        <input
          type="text"
          class="form-control"
          id="name"
          name="name1"
          placeholder="Digitar la Nombre del 1 Estudiante"
          required
        />
      </div>
      <div class="mb-3">
        <label for="stundetn" class="form-label">Digitar la Nota 1 Estudiante</label>
        <input
          type="number"
          class="form-control"
          id="stundetn"
          name="nota1"
          placeholder="Digitar la Nota 1 Estudiante"
          required
        />
      </div>
      <div class="mb-3">
        <label for="stundetn2" class="form-label">Digitar la Nota 2 Estudiante</label>
        <input
          type="number"
          class="form-control"
          id="stundetn2"
          name="nota2"
          placeholder="Digitar la Nota 2 Estudiante"
          required
        />
      </div>
      <div class="mb-3">
        <label for="stundetn3" class="form-label">Digitar la Nota 3 Estudiante</label>
        <input
          type="number"
          class="form-control"
          id="stundetn3"
          name="nota3"
          placeholder="Digitar la Nota 3 Estudiante"
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
    $name1 = $_POST["name1"];
    $nota1 = $_POST["nota1"];
    $nota2 =  $_POST["nota2"];
    $nota3 =  $_POST["nota3"];
    $promedio = ($nota1 +$nota2 +$nota3) / 3;
    if ($promedio <= 3.9) {
        echo "{$name1} Estudie su promedio {$promedio}";
    }else{
        echo "{$name1} Becado su promedio {$promedio}";        
    }
?>