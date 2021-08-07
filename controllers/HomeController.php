<?php
require_once 'models/Producto.php';
require_once 'models/Categoria.php';

class HomeController{

    
// ver productos 
public function index(){
$productos = new Producto();
$resultado = $productos->getProductos();
$vendidos = $productos->masVendidos();
require_once 'views/home.php';    
}    

// ver productos por categoria
public function category(){
error_reporting(0);
if($_GET['id']){
   // mostrar nombre de la categoria 
   $categorias = new Categoria();
   $categorias->setCategoria($_GET['id']);
   $categoria = $categorias->categoriaId();


   //mostrar productos por categoria
   $producto = new Producto();
   $producto->setCategoria($_GET['id']);
   $productos = $producto->productosCategorias();

   if($categoria == null){
     require_once 'views/404.php';   
   }else{
    require_once 'views/category.php'; 
   }
}else{
    require_once 'views/404.php';   
} 
}

// ver detalle de producto
public function product_detail(){
  error_reporting(0);
  if($_GET['id']){
    $productos = new Producto();
    $productos->setIdProducto($_GET['id']);
    $producto = $productos->getProductosId();

    $vendidos = $productos->masVendidos();

    $productos->setCategoria($producto->id_categoria);
    $relacionados = $productos->productosCategorias();

    if($producto == null){
      require_once 'views/404.php';   
    }else{
      require_once 'views/detail.php';  
    }
  }else{
    require_once 'views/404.php';
  }
}


public function personalizeProduct(){
  require_once 'views/person_product.php';
}

// ir a la pagina de contacto
public function contact(){
  require_once 'views/contact.php';
}


//ir a la pagina de about 
public function about(){
  require_once 'views/about.php';
}
}