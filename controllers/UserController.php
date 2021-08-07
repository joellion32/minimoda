<?php
require_once 'models/Usuario.php';
require_once 'models/Pedido.php';

class UserController{

public function index(){
    error_reporting(0);
    $pedido = new Pedido();
    $pedidos = $pedido->getPedidos();
    require_once 'views/login.php';      
}

public function register(){
include_once 'views/create.php';    
}

public function save(){
if(isset($_POST)){
//iniciar la session
$usuario = new Usuario();
$usuario->setNombre($_POST['nombre']);
$usuario->setEmail($_POST['email']);
$usuario->setPassword($_POST['password']);
$guardar = $usuario->save();

if($guardar){
$_SESSION['guardar'] = "El usuario se ha registrado sastifastoriamente";
}

else{
$_SESSION['error'] = "Error al registrar usuario";    
}

}

header("location:" .base_url.'User/index');



}//cierre del save



// funcion para loguear usuario

public function login(){
if(isset($_POST)){
$usuario = new Usuario();
$usuario->setEmail($_POST['email']);
$usuario->setPassword($_POST['password']);

//indentificar usuarios
$identificar = $usuario->login();
}

// para guardar los datos del usuario el una session
if($identificar && is_object($identificar)){
$_SESSION['identificar'] = $identificar; 
}

else{
$_SESSION['error'] = "error al iniciar sesion";    
}

header("location:" .base_url. 'User/index');
}


public function logout(){
if(isset($_SESSION['identificar'])){
unset($_SESSION['identificar']);
} 
if(isset($_SESSION['admin'])){
unset($_SESSION['admin']);
} 

header("location:" .base_url.'User/index');
}


}//cierre de la clase