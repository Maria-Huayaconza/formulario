<?php
require_once("/xampp/htdocs/FORMULARIOS/conexion.php");
require_once("/xampp/htdocs/FORMULARIOS/clases/contacto.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $persona = new persona($conexion,$nombre,$apellido,$telefono,$gmail);
    $persona ->eliminarpersona($id);

    header("location: index.php");
}
?>