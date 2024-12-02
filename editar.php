<?
require_once("/xampp/htdocs/FORMULARIOS/conexion.php");
require_once("/xampp/htdocs/FORMULARIOS/clases/contacto.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql="SELECT * FROM `persona`";
    $resultado = mysqli_query($conexion,$sql);
    $peronaData = mysqli_fetch_assoc($resultado);
}
if($_SERVER['REQUEST_METHOD']=="POST"){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $gmail = $_POST["gmail"];

    $persona = new persona($conexion,$nombre,$apellido,$telefono,$gmail);
    $persona->editarpersona($id);

    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar datos</title>
</head>
<body>
    <h1>ACTUALIZAR CONTACTO</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value= "<?php echo $peronaData["id"]?>";required> 
        <input type="text" name="nombre" placeholder="nombre" value=" <?php echo $peronaData["nombre"]?>"; required>
        <input type="text" name="apellido" placeholder="apellido" value="<?php echo $peronaData["apellido"]?>"; required>
        <input type="number" name="telefono" placeholder="telefono" value="<?php echo $peronaData["telefono"]?>";required>
        <input type="email" name="gmail" placeholder="gmail" value="<?php echo $peronaData["gmail"]?>"; required>
        <button type="submit">actualizar</button>   
    </form>
</body>
</html>