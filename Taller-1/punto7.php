<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 1 Punto 7</title>
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
<form class="mt-3" action="punto7.php" method="POST">
        <div class="mb-3">
        <label for="articulo" class="form-label">Nombre del Articulo</label>
        <input
          type="number"
          class="form-control"
          id="articulo"
          name="articulo"
          placeholder="Nombre del Articulo"
          required
        />
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Precio del Articulo Unidad</label>
          <input
            type="number"
            class="form-control"
            id="price"
            name="price"
            placeholder="Precio del Articulo Unidad"
            required
          />
        </div>
        <div class="mb-3">
          <label for="cantidad" class="form-label">Cantidad de Articulo</label>
          <input
            type="number"
            class="form-control"
            id="cantidad"
            name="cantidad"
            placeholder="Cantidad de Articulo"
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
    $articulo = $_POST["articulo"];
    $price = $_POST["price"];
    $cantidad = $_POST["cantidad"];

    $total = $price * $cantidad;
    echo "El total de la facutra por el {$articulo} es de {$total}" ;
?>