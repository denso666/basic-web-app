<?php
require "../conecta.php";
$con = conecta();

$id_pedido      = $_POST["id_pedido"];
$id_producto    = $_POST["id_producto"];
$costo          = $_POST["costo"];
$cantidad       = $_POST["cantidad"];

// nuevo registro en pedido_producto
$query = `
    INSERT INTO pedido_producto
    (id_pedido, id_producto, costo, cantidad)
    VALUES
    ($id_pedido, $id_producto, $costo, $cantidad)
`;
$res = $con->query($query);

// actualización de total del pedido origen
if ($con->affected_rows > 0) {
    $sub_total = $costo * $cantidad;
    $con->query("UPDATE pedidos SET total = (total + $sub_total) WHERE id = $id_pedido");
    return $con->affected_rows;
}
return false;
?>