<?php
require_once("Pdo.php");

class Productos extends ConexiónPdo{
    
    private $productoId;
    private $categoriasId;
    private $precioUnitario;
    private $stock;
    private $unidadesPedidas;
    private $proveedorId;
    private $nombreProducto;
    private $descontinuado;

    public function __construct($productoId= 0, $categoriasId= 0, $precioUnitario=0, $stock=0,$unidadesPedidas=0,$proveedorId=0,$nombreProducto="",$descontinuado=""){
        $this->productoId = $productoId;
        $this->categoriasId = $categoriasId;
        $this->precioUnitario = $precioUnitario;
        $this->stock = $stock;
        $this->unidadesPedidas = $unidadesPedidas;
        $this->proveedorId = $proveedorId;
        $this->nombreProducto = $nombreProducto;
        $this->descontinuado = $descontinuado;
        parent::__construct();
    }
    
    //Getters
    public function getProductoId(){
        return $this->productoId;
    }

    public function getCategoriasId(){
        return $this->categoriasId;
    }

    public function getPrecioUnitario(){
        return $this->precioUnitario;
    }

    public function getStock(){
        return $this->stock;
    }

    public function getUnidadesPedidas(){
        return $this->unidadesPedidas;
    }

    public function getProveedorId(){
        return $this->proveedorId;
    }

    public function getNombreProducto(){
        return $this->nombreProducto;
    }

    public function getDescontinuado(){
        return $this->descontinuado;
    }


    //Setters
    public function setProductoId($productoId){
        $this->productoId =$productoId;
    }

    public function setCategoriasId($categoriasId){
        $this->categoriasId =$categoriasId;
    }

    public function setPrecioUnitario($precioUnitario){
        $this->precioUnitario =$precioUnitario;
    }

    public function setStock($stock){
        $this->stock =$stock;
    }

    public function setUnidadesPedidas($unidadesPedidas){
        $this->unidadesPedidas =$unidadesPedidas;
    }

    public function setProveedorId($proveedorId){
        $this->proveedorId =$proveedorId;
    }

    public function setNombreProducto($nombreProducto){
        $this->nombreProducto =$nombreProducto;
    }

    public function setDescontinuado($descontinuado){
        $this->descontinuado =$descontinuado;
    }

    public function obtenerCategoriasId(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT categoriasId,categorias_nombre FROM categorias");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function CategoriasId(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT categoriasId,categorias_nombre FROM categorias WHERE categoriasId=:categoriasId");
            $stm->bindParam(":categoriasId",$this->categoriasId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function ProveedorId(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT proveedorId,proveedor_nombre FROM proveedores WHERE proveedorId=:proveedorId");
            $stm->bindParam(":proveedorId",$this->proveedorId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function obtenerProveedorId(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT proveedorId,proveedor_nombre FROM proveedores");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    // public function innerJoins(){
    //     try {
    //         $stm = $this-> dbCnx -> prepare("SELECT * FROM productos INNER JOIN categorias ON productos.productoId = categorias.categoriasId INNER JOIN proveedores ON productos.proveedorId = proveedores.proveedorId");
    //         $stm -> execute();
    //         return $stm -> fetchAll();
    //     } catch (Exception $e) {
    //         return $e->getMessage();
    //     }
    // }


    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO productos(categoriasId,precioUnitario,stock,unidadesPedidas,proveedorId,nombreProducto,descontinuado) 
            VALUES (:cateID,:precio,:stock,:unidades,:proveID,:namePro,:descontinuado)");
            $stm->bindParam(":cateID",$this->categoriasId);
            $stm->bindParam(":precio",$this->precioUnitario);
            $stm->bindParam(":stock",$this->stock);
            $stm->bindParam(":unidades",$this->unidadesPedidas);
            $stm->bindParam(":proveID",$this->proveedorId);
            $stm->bindParam(":namePro",$this->nombreProducto);
            $stm->bindParam(":descontinuado",$this->descontinuado);
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getAll(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM productos INNER JOIN categorias ON productos.categoriasId = categorias.categoriasId INNER JOIN proveedores ON productos.proveedorId = proveedores.proveedorId");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function delete(){
        try {
            $stm = $this-> dbCnx -> prepare("DELETE FROM productos WHERE productoId = :id");
            $stm->bindParam(":id",$this->productoId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function selectOne(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM productos WHERE productoId = :id");
            $stm->bindParam(":id",$this->productoId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(){
        try {
            $stm = $this-> dbCnx -> prepare("UPDATE productos SET categoriasId=:catId , precioUnitario=:precio , stock=:stock , unidadesPedidas=:unidades, proveedorId=:provId, nombreProducto=:namePro, descontinuado=:desco WHERE productoId = :id");
            $stm->bindParam(":id",$this->productoId);
            $stm->bindParam(":catId",$this->categoriasId);
            $stm->bindParam(":precio",$this->precioUnitario);
            $stm->bindParam(":stock",$this->stock);
            $stm->bindParam(":unidades",$this->unidadesPedidas);
            $stm->bindParam(":provId",$this->proveedorId);
            $stm->bindParam(":namePro",$this->nombreProducto);
            $stm->bindParam(":desco",$this->descontinuado);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>