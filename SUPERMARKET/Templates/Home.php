<?php
require_once("../Models/Login.php");
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home </title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
         crossorigin="anonymous" defer ></script>
      <!-- APACHE Echars -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.2/echarts.min.js" defer></script>
      <script src="./js/home.js" defer></script>
      <link rel="stylesheet" type="text/css" href="./assets/css/home.css">
   </head>
   <body>
      <div class="contenedor">
         <div class="parte-izquierda">
            <div class="perfil">
               <h3 style="margin-bottom: 2rem;">Camp Skiller.</h3>
               <img src="./assets/images/Calamardo.jpeg" alt="" class="imagenPerfil">
               <h3><?= $_SESSION["username"]?></h3>
            </div>
            <div class="menus">
               <a href="./Home.php" style="display: flex;gap:2px;">
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
            <h2 class="m-2">Promedio</h2>
            <div class="menuTabla contenedor2">
               <div id="charts1" class="charts"> </div>
            </div>
         </div>
         <div class="parte-derecho ">
            <p>Cargando...</p>
         </div>
      </div>
   </body>
</html>