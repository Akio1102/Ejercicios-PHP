<?php
require_once("../Models/FacturasDetalle.php");
$data = new FacturasDetalle();
$all = $data -> getAll();
$facturas = $data->obtenerFacturas();
$productos = $data->obtenerProductos();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Página Factura Detalle</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
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
            <a href="./Home.php" style="display: flex;gap:1px;">
               <i class="bi bi-people"></i>
               <h3 style="margin: 0px;">Home</h3>
            </a>
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
            <a href="./Index.php" style="display: flex;gap:2px;color: brown;">
               <i class="bi bi-x-square"></i>
               <h3 style="margin: 0px;">salir</h3>
            </a>
         </div>
      </div>
      <div class="parte-media">
         <div style="display: flex; justify-content: space-between;">
            <h2>Facturas Detalles</h2>
            <button class="btn-m" data-bs-toggle="modal" data-bs-target="#registrarEstudiantes"><i class="bi bi-person-add " style="color: rgb(255, 255, 255);" ></i></button>
         </div>
         <div class="menuTabla contenedor2">
            <table class="table table-custom ">
               <thead>
                  <tr>
                     <th scope="col">FACTURA ID</th>
                     <th scope="col">PRODUCTO ID</th>
                     <th scope="col">CANTIDAD</th>
                     <th scope="col">PRECIO VENTA</th>
                     <th scope="col">BORRAR</th>
                  </tr>
               </thead>
               <tbody class="" id="tabla">
                  <!-- ///////Llenado DInamico desde la Base de Datos -->
                  <?php
                     foreach($all as $key => $val){
                     ?> 
                  <tr>
                     <td> # <?= $val["facturaId"] ?> </td>
                     <td> <?= $val["nombreProducto"] ?> </td>
                     <td> <?= $val["cantidad"] ?> </td>
                     <td> $ <?= $val["precioVenta"] ?> </td>
                     <td>
                        <a class="btn btn-outline-danger" href="../Controllers/FacturaDetalle/borrarFacturaDetalle.php?facturaId=<?=$val['facturaId']?>&req=delete">
                        <i class="bi bi-trash3"></i>Borrar</a>
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
         <h3>Facturas Detalles</h3>
         <p>Cargando...</p>
         <!-- ///////Generando la grafica -->
      </div>
      <!-- /////////Modal de registro de nuevo estuiante //////////-->
      <div class="modal fade" id="registrarEstudiantes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px)">
         <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
            <div class="modal-content" >
               <div class="modal-header" >
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Factura Detalle</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body" style="background-color: rgb(231, 253, 246);">
                  <form class="col d-flex flex-wrap" action="../Controllers/FacturaDetalle/registrarFacturaDetalle.php" method="post">
                     <div class="mb-1 col-12">
                        <label for="facturaId" class="form-label">Factura Id</label>
                        <select class="form-select" aria-label="Default select example" id="facturaId" name="facturaId" required>
                           <option selected>Seleccione el id de la Factura</option>
                           <?php
                              foreach($facturas as $key => $valor){
                              ?> 
                           <option value="<?= $valor["facturaId"]?>"><?= $valor["facturaId"]?></option>
                           <?php
                              }
                              ?>
                        </select>
                     </div>
                     <div class="mb-1 col-12">
                        <label for="productoId" class="form-label">Producto Id</label>
                        <select class="form-select" aria-label="Default select example" id="productoId" name="productoId" required>
                           <option selected>Seleccione el Producto</option>
                           <?php
                              foreach($productos as $key => $valor){
                              ?> 
                           <option value="<?= $valor["productoId"]?>"><?= $valor["nombreProducto"]?></option>
                           <?php
                              }
                              ?>
                        </select>
                     </div>
                     <div class="mb-1 col-12">
                        <label for="cantidad" class="form-label">cantidad</label>
                        <input 
                           type="number"
                           id="cantidad"
                           name="cantidad"
                           class="form-control"
                           required  
                           />
                     </div>
                     <div class="mb-1 col-12">
                        <label for="precioVenta" class="form-label">Precio Venta</label>
                        <input 
                           type="number"
                           id="precioVenta"
                           name="precioVenta"
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
   </body>
</html>