<?php
require_once("../Models/Login.php");
$data = new Login();
$idempleado = $data->obtenerEmpleadoId();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Inicio</title>
      <!-- Typografia -->
      <link
         href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap"
         rel="stylesheet"
         />
      <!-- boostrap -->
      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
         crossorigin="anonymous"
         />
      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
         crossorigin="anonymous"
         defer
         ></script>
      <!-- css -->
      <link rel="stylesheet" href="./assets/css/login.css" />
   </head>
   <body>
      <div class="container-m">
         <div class="section1">
            <div class="d-flex justify-content-center align-items-center">
               <img src="./assets/images/camper.png" alt="" class="logo" />
            </div>
            <div class="d-flex justify-content-center align-items-center">
               <h1 style="font-weight: 800">BIENVENIDOS</h1>
            </div>
            <div class="d-flex justify-content-center align-items-center">
               <form action="../Controllers/Login/Login.php" method="POST">
                  <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                     <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        />
                     <div id="emailHelp" class="form-text">
                        Mañana es una excusa maravillosa, ¿No crees?
                     </div>
                  </div>
                  <div class="mb-3">
                     <label for="password" class="form-label">Password</label>
                     <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        />
                  </div>
                  <input
                     type="submit"
                     class="btn btn-primary"
                     value="Loguearse"
                     name="loguearse"
                     />
               </form>
            </div>
            <div class="d-flex justify-content-center align-items-end mt-5 p-2">
               <p style="text-align: center">Artemis aprendiendo con TODAAAA!</p>
            </div>
         </div>
         <div class="section2" id="section2">
            <div class="d-flex justify-content-star">
               <h1 style="font-weight: 800; font-size: larger">Nuevo</h1>
            </div>
            <p style="font-style: italic">
               "cuando enseñar es un arte aprender es un placer"
            </p>
            <div class="d-flex justify-content-center align-items-center">
               <form action="../Controllers/Users/registrarUsers.php" method="POST">
                  <h1 class="m-5" style="font-weight: 800">REGISTRAR USUARIO</h1>
                  <div class="mb-3">
                     <label for="id_Empleado" class="form-label">Nombre Empleado</label>
                     <select class="form-select" aria-label="Default select example" id="id_Empleado" name="id_Empleado" required>
                        <option selected>Seleccione el id del Cliente</option>
                        <?php
                           foreach($idempleado as $key => $valor){
                           ?> 
                        <option value="<?= $valor["empleadoId"]?>"><?= $valor["empleado_nombre"]?></option>
                        <?php
                           }
                           ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                     <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        />
                  </div>
                  <div class="mb-3">
                     <label for="username" class="form-label">User Name</label>
                     <input
                        type="text"
                        id="username"
                        name="username"
                        class="form-control"
                        />
                  </div>
                  <div class="mb-3">
                     <label for="password" class="form-label">Password</label>
                     <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        />
                  </div>
                  <div class="mb-3 form-check">
                     <input
                        type="checkbox"
                        class="form-check-input"
                        id="exampleCheck1"
                        />
                     <label class="form-check-label" for="exampleCheck1"
                        >Check me out</label
                        >
                  </div>
                  <input
                     type="submit"
                     class="btn btn-primary"
                     value="Registrarse"
                     name="registrarse"
                     />
               </form>
            </div>
            <div class="d-flex justify-content-center align-items-end m-5">
               <img
                  src="./assets/images/registro.png"
                  alt=""
                  style="width: 50%; height: 10%; object-fit: cover"
                  />
            </div>
         </div>
      </div>
   </body>
</html>