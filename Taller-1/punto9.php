<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 1 Punto 9</title>
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
  <form method="POST">
    <label for="">Digite Cantidad</label>
    <input type="number" value="cantidad" name="cantidad">
    <input type="submit" value="Enviar">
  </form>

  <form method="POST">
    <?php
      if ($_POST) {
        $cantidad = $_POST["cantidad"]; 
        for ($i=1; $i < $cantidad +1; $i++) { 
          echo "<label>Digite nombre{$i}</label>
            <input type='text' name='nombre{$i}'>
            <label>Digite marca{$i}</label>
            <input type='number' name='marca{$i}'><br>";
        }
        if ($_POST) {
          $info_total = [];
          $numero_mayor = 0;
          $nombre_mayor;
          $numero_menor = INF;
          
          for ($i=1; $i < $cantidad +1; $i++) { 
            $agregar = [$_POST["marca{$i}"],$_POST["nombre{$i}"]];
            array_push($info_total,$agregar);
          }
          print_r($info_total);
          for ($i=0; $i < $cantidad ; $i++) { 
            if ($info_total[$i][0] > $numero_mayor) {
              $numero_mayor = $info_total[$i][0];
              $nombre_mayor = $info_total[$i][1];
            }
          }
          if ($numero_mayor > 15.5) {
            echo "El Atlet con mayor marca es: {$numero_mayor} con una marca de {$numero_mayor} y rompio record y gana 500 millones";
          }else{
            echo "El Atlet con mayor marca es: {$numero_mayor} con una marca de {$numero_mayor}";
          }
        }
      }
    ?>
    <input type="submit" value="enviar2">
  </form>
<div class="container-fluid my-3">
  <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-dark"><a href="./punto1.php" class="text-light">Ejercicioa 1</button>
    <button type="button" class="btn btn-dark"><a href="./punto2.php" class="text-light">Ejercicioa 2</button>
    <button type="button" class="btn btn-dark"><a href="./punto3.php" class="text-light">Ejercicioa 3</button>
    <button type="button" class="btn btn-dark"><a href="./punto4.php" class="text-light">Ejercicioa 4</button>
    <button type="button" class="btn btn-dark"><a href="./punto5.php" class="text-light">Ejercicioa 5</button>
    <button type="button" class="btn btn-dark"><a href="./punto6.php" class="text-light">Ejercicioa 6</button>
    <button type="button" class="btn btn-dark"><a href="./punto7.php" class="text-light">Ejercicioa 7</button>
    <button type="button" class="btn btn-dark"><a href="./punto8.php" class="text-light">Ejercicioa 8</button>
    <button type="button" class="btn btn-dark"><a href="./punto9.php" class="text-light">Ejercicioa 9</button>
    <button type="button" class="btn btn-dark"><a href="./punto10.php" class="text-light">Ejercicio 10</button>
  </div>
</div>
</body>
</html>