<?php


class Usuario{

    public $id;
    public $nombre;
    public $email;
    public $password;
    public $rol;
    public $db;


public function __construct() {

$this->db = Database::conexion();

}

   
// METODOS GETTERS
function getId() {
return $this->id;

}

function getNombre() {

return $this->nombre;

}

function getEmail() {
 return $this->email;

}


function getPassword() {

return $this->password = password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);

}

function getRol() {

return $this->rol;

}


//METODOS SETTERS
function setId($id) {

$this->id = $id;

}

function setNombre($nombre) {

$this->nombre = $this->db->real_escape_string($nombre);

}


function setEmail($email) {

$this->email = $this->db->real_escape_string($email);

}

function setPassword($password) {

$this->password = $password;

}


function setRol($rol) {

$this->rol = $rol;

}



   
public function save(){

$sql = "INSERT INTO usuarios VALUES(NULL,'{$this->getNombre()}','{$this->getEmail()}','{$this->getPassword()}','user');";
$save = $this->db->query($sql);
$result= false;

if($save){

$result= true;
}

return $result;
}


public function login(){
$result = false;  
$email = $this->email;
$password = $this->password;  
//comprobar si existe el usuario
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$login = $this->db->query($sql);

//comprobar si el usuario esta en la db
if($login && $login->num_rows == 1){
//meter los datos en un objeto o array    
$usuario = $login->fetch_object();

//verificar password
$verify = password_verify($password, $usuario->password);

if($verify){
$result = $usuario;
}

return $result;

}// cierre de la condicion


}// cierre de la funcion login

}//Cierre de la clase usuario