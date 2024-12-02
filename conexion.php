<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bd_contacto";

$conexion = mysqli_connect($host,$username,$password,$database);
 
if(!$conexion){
    die("erros en la conexion :". mysqli_connect_error());
}
