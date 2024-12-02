<?php
require_once("/xampp/htdocs/FORMULARIOS/conexion.php");
require_once("/xampp/htdocs/FORMULARIOS/clases/contacto.php");



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Contactos</title>
</head>
<body>
    <h1>Lista De Contactos</h1>
    <a href="crear.php">Registrar nuevo contacto</a>
    <h2>Lista de contactos:</h2>
    <?php
    $sql="SELECT * FROM `persona`";
    $resultado=mysqli_query($conexion,$sql);

    if (mysqli_num_rows($resultado)>0){
    while($fila=mysqli_fetch_assoc($resultado)){
        echo"ID:".$fila["id"]."Nombre:".$fila["nombre"]."Apellido:".$fila["apellido"]."Telefono:".$fila["telefono"]."Gmail:".$fila["gmail"]."<br>";
        echo " <a href='editar.php?id=" . $fila['id'] . "'>Editar</a> | ";
        echo "<a href='eliminar.php?id=" . $fila['id'] . "' onclick=\"return confirm('¿Estás seguro de eliminar este estudiante?')\">Eliminar</a><br>";
    }

    } else{
    echo"0 resultados";
}
?>
</body>
</html>