<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 1 Punto 6</title>
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
<div class="container-fluid my-3">
  <form class='mt-3' action="punto6.php" method='POST'>  
    <div class="container">
      <h1>Estudiante 1</h1>
          <div class='mb-3'>
              <label for='name1' class='form-label'>Digitar el Nombre del Estudiante #1</label>
                <input
                type='text'
                class='form-control'
                id='name1'
                name='name1'
                placeholder='Digitar el Nombre del Estudiante #1'
                required
                />
          </div>
          <div class='mb-3'>
              <label for='sex1' class='form-label'>Digitar el Sexo del Estudiante #1</label>
              <select class="form-select" aria-label="Default select example" id="sex1" name="sex1">
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
              </select>
          </div>
          <div class='mb-3'>
              <label for='nota1' class='form-label'>Digitar la Nota Definitiva #1</label>
              <input
                type='number'
                class='form-control'
                id='nota1'
                name='nota1'
                placeholder='Digitar la Nota Definitiva #1'
                required
              />
          </div>
    </div> 
    <div class="container">
      <h1>Estudiante 2</h1>
          <div class='mb-3'>
              <label for='name2' class='form-label'>Digitar el Nombre del Estudiante #2</label>
                <input
                type='text'
                class='form-control'
                id='name2'
                name='name2'
                placeholder='Digitar el Nombre del Estudiante #2'
                required
                />
          </div>
          <div class='mb-3'>
              <label for='sex2' class='form-label'>Digitar el Sexo del Estudiante #2</label>
              <select class="form-select" aria-label="Default select example" id="sex2" name="sex2">
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
              </select>
          </div>
          <div class='mb-3'>
              <label for='nota2' class='form-label'>Digitar la Nota Definitiva #2</label>
              <input
                type='number'
                class='form-control'
                id='nota2'
                name='nota2'
                placeholder='Digitar la Nota Definitiva #2'
                required
              />
          </div>
    </div> 
    <div class="container">
      <h1>Estudiante 3</h1>
          <div class='mb-3'>
              <label for='name3' class='form-label'>Digitar el Nombre del Estudiante #3</label>
                <input
                type='text'
                class='form-control'
                id='name3'
                name='name3'
                placeholder='Digitar el Nombre del Estudiante #3'
                required
                />
          </div>
          <div class='mb-3'>
              <label for='sex3' class='form-label'>Digitar el Sexo del Estudiante #3</label>
              <select class="form-select" aria-label="Default select example" id="sex3" name="sex3">
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
              </select>
          </div>
          <div class='mb-3'>
              <label for='nota3' class='form-label'>Digitar la Nota Definitiva #3</label>
              <input
                type='number'
                class='form-control'
                id='nota3'
                name='nota3'
                placeholder='Digitar la Nota Definitiva #3'
                required
              />
          </div>
    </div> 
    <button type='submit' class='btn btn-primary'>Enviar</button>
 </form>
</div>
<?php
      if ($_POST) {
        $nombres =[];
        $sexos =[];
        $notas =[];
        $name1 = $_POST["name1"];
        $sex1 = $_POST["sex1"];
        $nota1 = $_POST["nota1"];
        $name2 = $_POST["name2"];
        $sex2 = $_POST["sex2"];
        $nota2 = $_POST["nota2"];
        $name3 = $_POST["name3"];
        $sex3 = $_POST["sex3"];
        $nota3 = $_POST["nota3"];
        $num_mujeres = 0;
        $num_hombres = 0;
        array_push($nombres,$name1,$name2,$name3);
        array_push($sexos,$sex1,$sex2,$sex3);
        array_push($notas,$nota1,$nota2,$nota3);
        $maxima_nota = max($notas);
        $minima_nota = min($notas);
        $index_max = array_search($maxima_nota,$notas);
        $index_min = array_search($minima_nota,$notas);
        $nombres_mayor = array_values($nombres)[$index_max]; 
        $nombres_menor = array_values($nombres)[$index_min]; 
        if ($sex1) {
          if ($sex1 == "Masculino") {
            $num_hombres++;
          }else{
            $num_mujeres++;
          }
        }
        if ($sex2) {
          if ($sex2 == "Masculino") {
            $num_hombres++;
          }else{
            $num_mujeres++;
          }
        }
        if ($sex3) {
          if ($sex3 == "Masculino") {
            $num_hombres++;
          }else{
            $num_mujeres++;
          }
        }
        echo "<br>La persona con Más edad es {$nombres_mayor} con una nota de {$maxima_nota}<br>";
        echo "<br>La persona con Menos edad es {$nombres_menor} con una nota de {$minima_nota}<br>";
        echo "<br>La cantidad de Nujeres es de {$num_mujeres} y de Hombres es de {$num_hombres}";
      }
    ?>
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
