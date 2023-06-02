<?php
require_once("../../Models/Productos.php");
$data = new Productos();
$id = $_GET["productoId"];
$idCate = $_GET["categoriasId"];
$idProve = $_GET["proveedorId"];

$data->setProductoId($id);
$data->setCategoriasId($idCate);
$data->setProveedorId($idProve);

$categoria = $data->CategoriasId();
$proveedor = $data->ProveedorId();

$idcategorias = $data->obtenerCategoriasId();
$idproveedores = $data->obtenerProveedorId();

$record = $data->selectOne();
$val = $record[0];

if (isset($_POST["editar"])) {

  $data->setCategoriasId($_POST["categoriasId"]);
  $data->setPrecioUnitario($_POST["precioUnitario"]);
  $data->setStock($_POST["stock"]);
  $data->setUnidadesPedidas($_POST["unidadesPedidas"]);
  $data->setProveedorId($_POST["proveedorId"]);
  $data->setNombreProducto($_POST["nombreProducto"]);
  $data->setDescontinuado($_POST["descontinuado"]);

  $data->update();
   echo "
    <script> alert('Los Datos fueron Actualizados exitosamente');
    document.location='../../Templates/Productos.php'
    </script>"; 
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Categorias</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="../../Templates/assets/css/estudiantes.css">

</head>

<body>
  <div class="contenedor">

    <div class="parte-izquierda">

      <div class="perfil">
        <h3 style="margin-bottom: 2rem;">Camp Skiler.</h3>
        <img src="../../Templates/assets/images/Calamardo.jpeg" alt="" class="imagenPerfil">
        <h3 >Cristian Diaz</h3>
      </div>
      <div class="menus">
        <a href="../../Templates/Categorias.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Categorias</h3>
        </a>
        <a href="../../Templates/Clientes.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Clientes</h3>
        </a>
        <a href="../../Templates/Empleados.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Empleados</h3>
        </a>
        <a href="../../Templates/Facturas.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Facturas</h3>
        </a>
        <a href="../../Templates/Proveedores.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Proveedores</h3>
        </a>
        <a href="../../Templates/Productos.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Productos</h3>
        </a>
        <a href="../../Templates/FacturaDetalle.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3>Factura Detalle</h3>
        </a>
      </div>
    </div>

    <div class="parte-media">
        <h2 class="m-2">Productos a Editar</h2>
      <div class="menuTabla contenedor2">
      <form class="col d-flex flex-wrap" action=""  method="post">
                           <div class="mb-1 col-12">
                <label for="categoriasId" class="form-label">Categorias ID</label>
                <select class="form-select" aria-label="Default select example" id="categoriasId" name="categoriasId" required>
                  <?php
                    foreach($categoria as $key => $valor){
                    ?> 
                  <option  value="<?= $valor["categoriasId"]?>"><?= $valor["categorias_nombre"]?></option>
                  <?php
                    }
                  ?>
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
                  value="<?= $val["precioUnitario"]?>"
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
                  value="<?= $val["stock"]?>"
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
                  value="<?= $val["unidadesPedidas"]?>"
                  required  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="proveedorId" class="form-label">Proveedor ID</label>
                <select class="form-select" aria-label="Default select example" id="proveedorId" name="proveedorId" required>
                  <?php
                    foreach($proveedor as $key => $valor){
                    ?> 
                    <option selected value="<?= $valor["proveedorId"]?>"><?= $valor["proveedor_nombre"]?></option>
                  <?php
                    }
                  ?>
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
                  value="<?= $val["nombreProducto"]?>"
                  required  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="descontinuado" class="form-label">Descontinuado</label>
                <select class="form-select" aria-label="Default select example" id="descontinuado" name="descontinuado" required>
                  <option selected><?= $val["descontinuado"]?></option>
                  <option value="Descontinuado">Descontinuado</option>
                  <option value="No Descontinuado">No Descontinuado</option>
                </select>
              </div>

              <div class=" col-12 m-2">
                <input type="submit" class="btn btn-primary" value="UPDATE" name="editar"/>
              </div>
            </form>  
        <div id="charts1" class="charts"> </div>
      </div>
    </div>

    <div class="parte-derecho " id="detalles">
      <h3>Detalle Productos</h3>
      <p>Cargando...</p>
       <!-- ///////Generando la grafica -->

    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>




</body>

</html>