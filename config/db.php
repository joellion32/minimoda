<?php

class Database{
  
public function conexion(){
$conexion = new mysqli("localhost" , "root" , "" , "minimoda");
$conexion->query("SET NAMES utf8");
return $conexion;
}    

}