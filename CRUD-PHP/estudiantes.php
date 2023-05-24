<?php
require_once("config.php");
$data = new Config();
$all = $data -> getAll();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estudiantes.css">

</head>

<body>
  <div class="contenedor">

    <div class="parte-izquierda">

      <div class="perfil">
        <h3 style="margin-bottom: 2rem;">Camper Skills.</h3>
        <img src="images/Diseño sin título.png" alt="" class="imagenPerfil">
        <h3>Maicol Estrada</h3>
      </div>
      <div class="menus">
        <a href="/Home/home.php" style="display: flex;gap:2px;">
          <i class="bi bi-house-door"> </i>
          <h3 style="margin: 0px;">Home</h3>
        </a>
        <a href="estudiantes.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3 style="margin: 0px;font-weight: 800;">Estudiantes</h3>
        </a>
       


      </div>
    </div>

    <div class="parte-media">
      <div style="display: flex; justify-content: space-between;">
        <h2>Estudiantes</h2>
        <button class="btn-m" data-bs-toggle="modal" data-bs-target="#registrarEstudiantes"><i class="bi bi-person-add " style="color: rgb(255, 255, 255);" ></i></button>
      </div>
      <div class="menuTabla contenedor2">
        <table class="table table-custom ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NOMBREs</th>
              <th scope="col">DIRECCION</th>
              <th scope="col">LOGROS</th>
              <th scope="col">SER</th>
              <th scope="col">INGLES</th>
              <th scope="col">SKILLS</th>
              <th scope="col">ASISTENCIA</th>
              <th scope="col">ESPECIALIDAD</th>
              <th scope="col">ELIMIANR</th>
              <th scope="col">EDITAR</th>
            </tr>
          </thead>
          <tbody class="" id="tabla">

            <!-- ///////Llenado DInamico desde la Base de Datos -->
            <?php
              foreach($all as $key => $val){
            ?> 
              <tr>
                <td> <?= $val["id"] ?> </td>
                <td> <?= $val["nombres"] ?> </td>
                <td> <?= $val["direccion"] ?> </td>
                <td> <?= $val["logros"] ?> </td>
                <td> <?= $val["ser"] ?> </td>
                <td> <?= $val["ingles"] ?> </td>
                <td> <?= $val["skills"] ?> </td>
                <td> <?= $val["asistencia"] ?> </td>
                <td> <?= $val["especialidad"] ?> </td>
                <td>
                  <a class="btn btn-outline-danger" href="borrarEstudiantes.php?id=<?=$val['id']?>&req=delete">
                  <i class="bi bi-trash3"></i>Borrar</a>
                </td>
                <td>
                  <a class="btn btn-outline-warning" href="borrarEstudiantes.php?id=<?=$val['id']?>&req=editar">
                  <i class="bi bi-pencil-square"></i>Editar</a>
                </td>
              </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    
    <div class="parte-derecho " id="detalles">
      <h3>Detalle Estudiantes</h3>
      <p>Cargando...</p>
       <!-- ///////Generando la grafica -->

    </div>





    <!-- /////////Modal de registro de nuevo estuiante //////////-->
    <div class="modal fade" id="registrarEstudiantes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px)">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content" >
          <div class="modal-header" >
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Estudiante</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background-color: rgb(231, 253, 246);">
            <form class="col d-flex flex-wrap" action="registrarEstudiantes.php" method="post">
              <div class="mb-1 col-12">
                <label for="nombres" class="form-label">Nombres</label>
                <input 
                  type="text"
                  id="nombres"
                  name="nombres"
                  class="form-control"
                  required  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="direccion" class="form-label">Direccion</label>
                <input 
                  type="text"
                  id="direccion"
                  name="direccion"
                  class="form-control"
                  required  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="logros" class="form-label">Logros</label>
                <input 
                  type="text"
                  id="logros"
                  name="logros"
                  class="form-control"
                  required  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="ser" class="form-label">Ser</label>
                <input 
                  type="number"
                  id="ser"
                  name="ser"
                  class="form-control"
                  required  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="ingles" class="form-label">Ingles</label>
                <select class="form-select" aria-label="Default select example" id="ingles"
                  name="ingles" required>
                  <option selected>Selecione Nivel de Ingles</option>
                  <option value="A0">A0</option>
                  <option value="A1">A1</option>
                  <option value="A2">A2</option>
                  <option value="B1">B1</option>
                  <option value="B2">B2</option>
                  <option value="C1">C1</option>
                  <option value="C2">C2</option>
                </select>
              </div>

              <div class="mb-1 col-12">
                <label for="skills" class="form-label">Skills</label>
                <input 
                  type="text"
                  id="skills"
                  name="skills"
                  class="form-control"
                  required  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="asistencia" class="form-label">Asistencia</label>
                <input 
                  type="text"
                  id="asistencia"
                  name="asistencia"
                  class="form-control"
                  required  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="especialidad" class="form-label">Especialidad</label>
                <select class="form-select" aria-label="Default select example" id="especialidad"
                  name="especialidad" required>
                  <option selected>Selecione Especialidad</option>
                  <option value="Front-End">Front-End</option>
                  <option value="Back-End">Back-End</option>
                  <option value="Full-Stack">Full-Stack</option>
                </select>
              </div>

              <div class=" col-12 m-2">
                <input type="submit" class="btn btn-primary" value="guardar" name="guardar"/>
              </div>
            </form>  
         </div>       
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>


</body>

</html>