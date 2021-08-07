<?php

class Pedido{

    public $id_pedido;
    public $usuario_id;	
    public $pais;	
    public $provincia;
    public $direccion;	
    public $cuenta;	
    public $cvc;
    public $fecha_tarjeta;	
    public $total_compra;	
    public $db;

    //constructor
    public function __construct() {
        $this->db = Database::conexion();
    }
    
    // GETTERS AND SETTERS 

    function getPedidoId() { 
        return $this->id_pedido; 
   } 

   function setPedidoId($id_pedido) {  
       $this->id_pedido = $id_pedido; 
   } 

   function getUsuarioid() { 
        return $this->usuarioid; 
   } 

   function setUsuarioid($usuarioid) {  
       $this->usuarioid = $usuarioid; 
   } 

   function getPais() { 
        return $this->pais; 
   } 

   function setPais($pais) {  
       $this->pais = $pais; 
   } 

   function getProvincia() { 
        return $this->provincia; 
   } 

   function setProvincia($provincia) {  
       $this->provincia = $provincia; 
   } 

   
   function getDireccion() { 
        return $this->direccion; 
   } 

   function setDireccion($direccion) {  
       $this->direccion = $direccion; 
   } 

   function getCuenta() { 
        return $this->cuenta; 
   } 

   function setCuenta($cuenta) {  
       $this->cuenta = $cuenta; 
   } 

   function getCvc() { 
        return $this->cvc; 
   } 

   function setCvc($cvc) {  
       $this->cvc = $cvc; 
   } 

   function getFechatarjeta() { 
        return $this->fechatarjeta; 
   } 

   function setFechatarjeta($fechatarjeta) {  
       $this->fechatarjeta = $fechatarjeta; 
   } 

   function getTotalcompra() { 
        return $this->totalcompra; 
   } 

   function setTotalcompra($totalcompra) {  
       $this->totalcompra = $totalcompra; 
   } 


   // guardar pedidos
public function save(){
    $result = false;    
    $sql = "INSERT INTO pedido VALUES(NULL,{$this->getUsuarioid()}, '{$this->getPais()}', '{$this->getProvincia()}','{$this->getDireccion()}','{$this->getCuenta()}','{$this->getCvc()}', '{$this->getFechatarjeta()}', {$this->getTotalcompra()}, CURDATE(), 'pendiente')"; 
    $save = $this->db->query($sql);
    
    if($save){
        $result = true;
    }
    
    return $result;
}

//metodo para guardar la linea de pedido solo ver administrador
public function save_linea(){
    $result = false;    
    $sql = "SELECT LAST_INSERT_ID() as 'pedido'";
    $pedido_id = $this->db->query($sql)->fetch_object()->pedido;  
    
    foreach($_SESSION['carrito'] as $elemento){
    $producto = $elemento['producto'];  
    $insert  = "INSERT INTO detalle_pedido VALUES(null,{$pedido_id},{$producto->id_producto},{$elemento['unidades']})";
    
    $save_linea = $this->db->query($insert);
    
    }//cierre del foreach
    
    if($save_linea){
    $result = true;
    }
    
    return $insert;
    
}//cierre de la funcion sava linea


// mostrar pedidos 
public function getPedidos(){
    $pedidos = $this->db->query("SELECT * FROM pedido WHERE usuario_id = {$_SESSION['identificar']->id} ORDER BY id DESC"); 
    return $pedidos;   
}

// detalle del pedido
public function getDetalle(){
    $detalle = $this->db->query("SELECT productos.*, detalle_pedido.unidades FROM detalle_pedido 
    INNER JOIN productos ON detalle_pedido.id_producto = productos.id_producto 
    WHERE detalle_pedido.id_pedido = {$this->getPedidoId()}"); 
    return $detalle;   
}


// enviar correo
public function ultPedido(){
    $pedidos = $this->db->query("SELECT pedido.*, usuarios.nombre, usuarios.email FROM pedido INNER JOIN usuarios ON pedido.usuario_id = usuarios.id 
    ORDER BY pedido.id DESC LIMIT 1"); 
    return $pedidos->fetch_object();
}


}
?>