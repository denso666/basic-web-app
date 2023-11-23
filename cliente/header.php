<?php
// verificar si hay un pedido abierto
if (!isset( $_SESSION["id_pedido"] )) {
    require "../administrador/funciones/conecta.php";
    $con = conecta();
    $res = $con->query("INSERT INTO pedidos (id, total, cerrado) VALUES (0, 0, 0)");
    $_SESSION["id_pedido"] = $con->insert_id;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Bienvenido</a>
        <div class="row justify-content-center">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="./index.php">Home</a>
                    <a class="nav-link" href="./productos.php">Productos</a>
                    <a class="nav-link" href="./formulario_contacto.php">Contacto</a>
                    <a class="nav-link" href="./carrito.php">Carrito</a>
                </div>
            </div>
        </div>
    </div>
</nav>