<?php
require "../conecta.php";
$con = conecta();

//Recibe variables
$id         = $_POST['id'];
$nombre     = $_POST['nombre'];
$archivo_n    = $_POST['archivo'];

//CAMPOS A ACTUALIZAR (DE LA BD)
$sql = "UPDATE promociones SET nombre='$nombre', archivo_n='$archivo_n'";

//Cambio de foto
if (!empty($archivo)) {
    $datos_foto = explode(".", $archivo_n); 
    $archivo    = md5($datos_foto[0]).".".$datos_foto[1];
    $sql        = $sql.", archivo='$archivo'";
    // Copiar imagen
    copy($_FILES['imagen']['tmp_name'], "../../imagenes/$archivo");
}

$sql = $sql." WHERE id=$id";

$res = $con->query($sql);// EJECUTAR CONSULTA 
header("Location: ../../promociones_lista.php");
?>
