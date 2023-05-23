<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 1 Punto 10</title>
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
  <form class="mt-3" action="punto10.php" method="POST">
      <div class="mb-3">
        <label for="numero" class="form-label">Ingrese Número</label>
        <input
          type="number"
          class="form-control"
          id="numero"
          name="numero"
          placeholder="Ingrese Número"
        />
        <input
          type="submit"
          class="form-control"
          name="ejecutar"
          placeholder="Agregar Número"
          value="Agregar Número"
        />
        <label class="form-label">Mostrar Resultado de números</label>
          <input
            type="submit"
            class="form-control"
            name="ejecutar"
            placeholder="Mostrar Resultado"
            value="Mostrar Resultado"
          />
      </div>
    <button type="reset" class="btn btn-primary">Limpiar</button>
  </form>
</div>   
</body>
</html>
<?php
  session_start();
  if (isset($_POST["ejecutar"])) {
    if ($_POST["ejecutar"] == "Agregar Número"){
      $numero = $_POST["numeros"];
      if ($numero != 0) {
        array_push($_SESSION["numeros"],$numero);
      }
    }else if($_POST["ejecutar"]== "Mostrar Resultado"){
      $numeros = $_SESSION["numeros"];
      $suma = array_sum($numeros);
      $promedio = count($numeros) > 0 ? $suma / count($numeros): 0;
      $mayor = max($numeros);
      $menor = min($numeros);
      $contador = count($numeros);

      echo "
      <div class='container-fluid'>
      <h2>Resultados :</h2>
      <p>La Sumatoria de los valores es: {$suma}</p>
      <p>El Valor del promedio es: {$promedio}</p>
      <p>Se Ingresaron: {$contador}</p>
      <p>El Mayor valor es: {$mayor}</p>
      <p>El Menor valor es: {$menor}</p>
      </div> 
      ";
    }
  }else{
    $_SESSION["numeros"] = [];
  }
?>