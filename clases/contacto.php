<?php
require_once("/xampp/htdocs/FORMULARIOS/conexion.php");
class persona{
    public $nombre,$apellido,$telefono,$gmail;
    public $conexion;
//metodo contructor
public function __construct($conexion,$nombre,$apellido,$telefono,$gmail){
    $this->conexion=$conexion;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->telefono=$telefono;
    $this->gmail=$gmail;
}
//metodo registrarpersona
public function registrarpersona(){
   $sql="INSERT INTO persona(`nombre`, `apellido`, `telefono`, `email`) VALUES ('$this->nombre','$this->apellido','$this->telefono','$this->gmail')";
   if(mysqli_query($this->conexion,$sql)) {
    echo"contacto registrado:";
   }else{
    echo"error al registrar contacto:". mysqli_error($this->conexion);
   }
}
//metodo mostrarpersona
public function mostrarpersona($conexion){
    $sql="SELECT * FROM `persona`";
    $resultado=(mysqli_query($conexion,$sql));
if(mysqli_num_rows($resultado)>0){
    while($fila=mysqli_fetch_assoc($resultado)){
        echo"ID:".$fila["id"]."Nombre:".$fila["nombre"]."Apellido:".$fila["apellido"]."Telefono:".$fila["telefono"]."Gmail:".$fila["gmail"]."<br>";
    }
} else{
    echo"0 resultados";
}
}
//metodo edita persona
public function editarpersona($id){
$sql="UPDATE persona SET `nombre`='$this->nombre',`apellido`='$this->apellido',`telefono`='$this->telefono',`gmail`='$this->gmail' WHERE id=$id";
if(mysqli_query($this->conexion,$sql)){
    echo"contacto actualizado";
}else{
    echo"error al actualizar contacto:". mysqli_error($this->conexion);
}
}
//metodo elimar persona
public function eliminarpersona($id){
    $sql="DELETE FROM `persona` WHERE id=$id";
    if(mysqli_query($this->conexion,$sql)){
        echo"contacto eliminado correctamente";
    }else{
        echo"error al eliminar contacto:".mysqli_error($this->conexion);
    }
}
}