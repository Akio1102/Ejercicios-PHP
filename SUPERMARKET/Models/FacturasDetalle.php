<?php

require_once("Pdo.php");

class FacturasDetalle extends ConexiónPdo{
    
    private $facturaId;
    private $productoId;
    private $cantidad;
    private $precioVenta;

    public function __construct($facturaId=0,$productoId= 0, $cantidad= 0, $precioVenta=0){
        $this->facturaId = $facturaId;
        $this->productoId = $productoId;
        $this->cantidad = $cantidad;
        $this->precioVenta = $precioVenta;
        parent::__construct();
    }
    
    //Getters
    public function getFacturaId(){
        return $this->facturaId;
    }

    public function getProductoId(){
        return $this->productoId;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    public function getPrecioVenta(){
        return $this->precioVenta;
    }

    //Setters
    public function setFacturaId($facturaId){
        $this->facturaId =$facturaId;
    }

    public function setProductoId($productoId){
        $this->productoId =$productoId;
    }

    public function setCantidad($cantidad){
        $this->cantidad =$cantidad;
    }

    public function setPrecioVenta($precioVenta){
        $this->precioVenta =$precioVenta;
    }

    public function obtenerFacturas(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT facturaId FROM facturas");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function obtenerProductos(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT productoId,nombreProducto FROM productos");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO facturadetalle(facturaId,productoId,cantidad,precioVenta) 
            VALUES (:facturaId,:productoId,:cantidad,:precioVenta)");
            $stm->bindParam(":facturaId",$this->facturaId);
            $stm->bindParam(":productoId",$this->productoId);
            $stm->bindParam(":cantidad",$this->cantidad);
            $stm->bindParam(":precioVenta",$this->precioVenta);
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getAll(){
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM facturadetalle INNER JOIN facturas ON  facturadetalle.facturaId = facturas.facturaId INNER JOIN productos ON facturadetalle.productoId = productos.productoId");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function delete(){
        try {
            $stm = $this-> dbCnx -> prepare("DELETE FROM facturadetalle WHERE facturaId = :id");
            $stm->bindParam(":id",$this->facturaId);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>