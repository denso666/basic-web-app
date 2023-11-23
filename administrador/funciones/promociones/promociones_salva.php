<?php
require "../conecta.php";
$con = conecta();

$nombre     = $_POST['nombre'];
$archivo_n = $_FILES['imagen']['name'];
$datos_foto = explode(".", $archivo_n);
$archivo    = md5($datos_foto[0]).".".$datos_foto[1];

copy($_FILES['imagen']['tmp_name'], "../../imagenes/$archivo");

$sql = "INSERT INTO promociones (nombre, archivo, archivo_n) VALUES ('$nombre','$archivo', '$archivo_n')";
$res = $con->query($sql);

header("Location: ../../promociones_lista.php");
?>