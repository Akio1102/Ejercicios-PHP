<?php
require_once("../Models/Empleados.php");
$data = new Empleados();
$all = $data -> getAll();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Empleados</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./assets/css/estudiantes.css">

</head>

<body>
  <div class="contenedor">

    <div class="parte-izquierda">

      <div class="perfil">
        <h3 style="margin-bottom: 2rem;">Camper Skills.</h3>
        <img src="./assets/images/Calamardo.jpeg" alt="" class="imagenPerfil">
        <h3>Cristian Diaz</h3>
      </div>
      <div class="menus">
        <a href="./Categorias.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Categorias</h3>
        </a>
        <a href="./Clientes.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Clientes</h3>
        </a>
        <a href="./Empleados.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Empleados</h3>
        </a>
        <a href="./Facturas.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Facturas</h3>
        </a>
        <a href="./Proveedores.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Proovedores</h3>
        </a>
        <a href="./Productos.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Productos</h3>
        </a>
        <a href="./FacturaDetalle.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Factura Detalle</h3>
        </a>
      </div>
    </div>

    <div class="parte-media">
      <div style="display: flex; justify-content: space-between;">
        <h2>Empleados</h2>
        <button class="btn-m" data-bs-toggle="modal" data-bs-target="#registrarEstudiantes"><i class="bi bi-person-add " style="color: rgb(255, 255, 255);" ></i></button>
      </div>
      <div class="menuTabla contenedor2">
        <table class="table table-custom ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NOMBRE</th>
              <th scope="col">ROL</th>
              <th scope="col">CELULAR</th>
              <th scope="col">DIRECCION</th>
              <th scope="col">IMAGEN</th>
              <th scope="col">BORRAR</th>
              <th scope="col">EDITAR</th>
            </tr>
          </thead>
          <tbody class="" id="tabla">

            <!-- ///////Llenado DInamico desde la Base de Datos -->
            <?php
              foreach($all as $key => $val){
            ?> 
              <tr>
                <td> <?= $val["empleadoId"] ?> </td>
                <td> <?= $val["empleado_nombre"] ?> </td>
                <td> <?= $val["rol"] ?> </td>
                <td> <?= $val["celular"] ?> </td>
                <td> <?= $val["direccion"] ?> </td>
                <td> <?= $val["imagen"] ?> </td>
                <td>
                  <a class="btn btn-outline-danger" href="../Controllers/Empleados/borrarEmpleados.php?empleadoId=<?=$val['empleadoId']?>&req=delete">
                  <i class="bi bi-trash3"></i>Borrar</a>
                </td>
                <td>
                  <a class="btn btn-outline-warning" href="../Controllers/Empleados/actualizarEmpleados.php?empleadoId=<?=$val['empleadoId']?>">
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
      <h3>Detalle Clientes</h3>
      <p>Cargando...</p>
       <!-- ///////Generando la grafica -->

    </div>





    <!-- /////////Modal de registro de nuevo estuiante //////////-->
    <div class="modal fade" id="registrarEstudiantes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px)">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content" >
          <div class="modal-header" >
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Clientes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background-color: rgb(231, 253, 246);">
            <form class="col d-flex flex-wrap" action="../Controllers/Empleados/registrarEmpleados.php" method="post">
              <div class="mb-1 col-12">
                <label for="empleado_nombre" class="form-label">Nombre</label>
                <input 
                  type="text"
                  id="empleado_nombre"
                  name="empleado_nombre"
                  class="form-control"
                  required  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="rol" class="form-label">Empleado Rol</label>
                <select class="form-select" aria-label="Default select example" id="rol" name="rol" required>
                  <option selected>Seleccione el Rol del Empleados</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Jefe">Jefe</option>
                  <option value="Trabajador">Trabajador</option>
                </select>
              </div>

              <div class="mb-1 col-12">
                <label for="celular" class="form-label">Celular</label>
                <input 
                  type="text"
                  id="celular"
                  name="celular"
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
                <label for="imagen" class="form-label">Imagen</label>
                <input 
                  type="text"
                  id="imagen"
                  name="imagen"
                  class="form-control"
                  required  
                />
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