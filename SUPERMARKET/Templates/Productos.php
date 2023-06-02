<?php
require_once("../Models/Productos.php");
$data = new Productos();
$all = $data -> getAll();
$idcategorias = $data->obtenerCategoriasId();
$idproveedores = $data->obtenerProveedorId();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Página Productos</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
         crossorigin="anonymous" defer></script>
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
            <h2>Productos</h2>
            <button class="btn-m" data-bs-toggle="modal" data-bs-target="#registrarEstudiantes"><i class="bi bi-person-add " style="color: rgb(255, 255, 255);" ></i></button>
         </div>
         <div class="menuTabla contenedor2">
            <table class="table table-custom ">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">CATEGORIAS ID</th>
                     <th scope="col">PRECIO UNITARIO</th>
                     <th scope="col">STOCK</th>
                     <th scope="col">UNIDADES PEDIDAS</th>
                     <th scope="col">PROOVEEDOR ID</th>
                     <th scope="col">NOMBRE PRODUCTO</th>
                     <th scope="col">DESCONTINUADO</th>
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
                     <td> <?= $val["productoId"] ?> </td>
                     <td> <?= $val["categorias_nombre"] ?> </td>
                     <td> <?= $val["precioUnitario"] ?> </td>
                     <td> <?= $val["stock"] ?> </td>
                     <td> <?= $val["unidadesPedidas"] ?> </td>
                     <td> <?= $val["proveedor_nombre"] ?> </td>
                     <td> <?= $val["nombreProducto"] ?> </td>
                     <td> <?= $val["descontinuado"] ?> </td>
                     <td>
                        <a class="btn btn-outline-danger" href="../Controllers/Productos/borrarProductos.php?productoId=<?=$val['productoId']?>&req=delete">
                        <i class="bi bi-trash3"></i>Borrar</a>
                     </td>
                     <td>
                        <a class="btn btn-outline-warning" href="../Controllers/Productos/actualizarProductos.php?productoId=<?=$val['productoId']?>&categoriasId=<?=$val['categoriasId']?>&proveedorId=<?=$val['proveedorId']?>">
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
         <h3>Detalle Productos</h3>
         <p>Cargando...</p>
         <!-- ///////Generando la grafica -->
      </div>
      <!-- /////////Modal de registro de nuevo estuiante //////////-->
      <div class="modal fade" id="registrarEstudiantes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px)">
         <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
            <div class="modal-content" >
               <div class="modal-header" >
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Productos</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body" style="background-color: rgb(231, 253, 246);">
                  <form class="col d-flex flex-wrap" action="../Controllers/Productos/registrarProductos.php" method="post">
                     <div class="mb-1 col-12">
                        <label for="categoriasId" class="form-label">Categorias ID</label>
                        <select class="form-select" aria-label="Default select example" id="categoriasId" name="categoriasId" required>
                           <option selected>Seleccione el id de la Categorias</option>
                           <?php
                              foreach($idcategorias as $key => $valor){
                              ?> 
                           <option value="<?= $valor["categoriasId"]?>"><?= $valor["categorias_nombre"]?></option>
                           <?php
                              }
                              ?>
                        </select>
                     </div>
                     <div class="mb-1 col-12">
                        <label for="precioUnitario" class="form-label">Precio Unitario</label>
                        <input 
                           type="number"
                           id="precioUnitario"
                           name="precioUnitario"
                           class="form-control"
                           required  
                           />
                     </div>
                     <div class="mb-1 col-12">
                        <label for="stock" class="form-label">Stock</label>
                        <input 
                           type="number"
                           id="stock"
                           name="stock"
                           class="form-control"
                           required  
                           />
                     </div>
                     <div class="mb-1 col-12">
                        <label for="unidadesPedidas" class="form-label">Unidades Pedidas</label>
                        <input 
                           type="number"
                           id="unidadesPedidas"
                           name="unidadesPedidas"
                           class="form-control"
                           required  
                           />
                     </div>
                     <div class="mb-1 col-12">
                        <label for="proveedorId" class="form-label">Proveedor ID</label>
                        <select class="form-select" aria-label="Default select example" id="proveedorId" name="proveedorId" required>
                           <option selected>Seleccione el id del Proveedor</option>
                           <?php 
                              foreach($idproveedores as $key => $valor){
                              ?> 
                           <option value="<?= $valor["proveedorId"]?>"><?= $valor["proveedor_nombre"]?></option>
                           <?php
                              }
                              ?>
                        </select>
                     </div>
                     <div class="mb-1 col-12">
                        <label for="nombreProducto" class="form-label">Nombre Producto</label>
                        <input 
                           type="text"
                           id="nombreProducto"
                           name="nombreProducto"
                           class="form-control"
                           required  
                           />
                     </div>
                     <div class="mb-1 col-12">
                        <label for="descontinuado" class="form-label">Descontinuado</label>
                        <select class="form-select" aria-label="Default select example" id="descontinuado" name="descontinuado" required>
                           <option selected>Seleccione si esta Descontinuado o No</option>
                           <option value="Descontinuado">Descontinuado</option>
                           <option value="No Descontinuado">No Descontinuado</option>
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
   </body>
</html>