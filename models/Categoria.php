<?php
class Categoria {

public $id_categoria;
public $nombre_categoria;
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

public function categoriaId(){
    $categoria = $this->db->query("SELECT * FROM categorias WHERE id_categoria = {$this->getCategoria()}");
    return $categoria->fetch_object();
}

}

?>