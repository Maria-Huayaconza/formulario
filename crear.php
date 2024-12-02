<?php
require_once("/xampp/htdocs/FORMULARIOS/conexion.php");
require_once("/xampp/htdocs/FORMULARIOS/clases/contacto.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $gmail = $_POST["gmail"];

    $persona = new persona($conexion,$nombre,$apellido,$telefono,$gmail);
    $persona->registrarpersona();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR CONTACTO</title>
</head>
<body>
    <h1>Registro de Contactos</h1>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="nombre" required>
        <input type="text" name="apellido" placeholder="apellido" required>
        <input type="number" name="telefono" placeholder="telefono" required>
        <input type="email" name="gmail" placeholder="gmail" required>
        <button type="submit">REGISTRAR</button>
        <a href="index.php">lista de estudiante</a>
    </form>
    
</body>
</html>
