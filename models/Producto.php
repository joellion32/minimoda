<?php

class Producto{

public $id_producto;
public $nombre_producto;
public $descripcion_producto;
public $imagen_producto;
public $precio;
public $stock;
public $id_categoria;
public $db;

//constructor
public function __construct() {
    $this->db = Database::conexion();
}

// getters y setters
public function getCategoria(){
    return $this->id_categoria;
}

public function setCategoria($id){
    $this->id_categoria = $id;
}

public function getIdProducto(){
    return $this->id_producto;
}

public function setIdProducto($id_producto){
    $this->id_producto = $id_producto;
}


// mostrar todos los productos
public function getProductos(){
    $productos = $this->db->query("SELECT * FROM productos ORDER BY id_producto ASC LIMIT 6");
    return $productos;
}

public function getProductosId(){
    $producto = $this->db->query("SELECT * FROM productos WHERE id_producto = {$this->getIdProducto()}");
    return $producto->fetch_object();
}

public function masVendidos(){
    $productos = $this->db->query("SELECT * FROM productos ORDER BY id_producto ASC LIMIT 4");
    return $productos;
}

// mostrar por categorias 
public function productosCategorias(){
    $productos = $this->db->query("SELECT * FROM productos WHERE id_categoria = {$this->getCategoria()} ORDER BY id_producto DESC");
    return $productos;
}




}

?>