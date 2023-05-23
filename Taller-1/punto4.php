<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 1 Punto 4</title>
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
      <form class="mt-3" action="punto4.php" method="POST">
        <div class="mb-3">
        <label for="name1" class="form-label">Digitar la Nombre de la persona 1 Estudiante</label>
        <input
          type="text"
          class="form-control"
          id="name1"
          name="name1"
          placeholder="Digitar la Nombre de la persona 1 Estudiante"
          required
        />
      </div>
      <div class="mb-3">
        <label for="edad1" class="form-label">Digitar la Edad de la persona 1 Estudiante</label>
        <input
          type="number"
          class="form-control"
          id="edad1"
          name="edad1"
          placeholder="Digitar la Edad de la persona 1 Estudiante"
          required
        />
      </div>
      <div class="mb-3">
        <label for="name2" class="form-label">Digitar la Nombre de la persona 2 Estudiante</label>
        <input
          type="text"
          class="form-control"
          id="name2"
          name="name2"
          placeholder="Digitar la Nombre de la persona 2 Estudiante"
          required
        />
      </div>
      <div class="mb-3">
        <label for="edad2" class="form-label">Digitar la Edad de la persona 2 Estudiante</label>
        <input
          type="number"
          class="form-control"
          id="edad2"
          name="edad2"
          placeholder="Digitar la Edad de la persona 1 Estudiante"
          required
        />
      </div>
      <div class="mb-3">
        <label for="name3" class="form-label">Digitar la Nombre de la persona 3 Estudiante</label>
        <input
          type="text"
          class="form-control"
          id="name3"
          name="name3"
          placeholder="Digitar la Nombre de la persona 3 Estudiante"
          required
        />
      </div>
      <div class="mb-3">
        <label for="edad3" class="form-label">Digitar la Edad de la persona 3 Estudiante</label>
        <input
          type="number"
          class="form-control"
          id="edad3"
          name="edad3"
          placeholder="Digitar la Edad de la persona 3 Estudiante"
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
    $edad1 = $_POST["edad1"];
    $name2 = $_POST["name2"];
    $edad2 = $_POST["edad2"];
    $name3 = $_POST["name3"];
    $edad3 = $_POST["edad3"];
    if ($edad1 > $edad2 && $edad1 > $edad3) {      
      echo "La persona con mayor edad es {$name1} con una edad de {$edad1}";
    }else if($edad2 > $edad1 && $edad2 > $edad3){
      echo "La persona con mayor edad es {$name2} con una edad de {$edad2}";      
    }else if($edad3 > $edad1 && $edad3 > $edad2){
      echo "La persona con mayor edad es {$name3} con una edad de {$edad3}";      
    }else{
      echo "Las personas tienen la misma edad que es {$edad1}";            
    }
?>