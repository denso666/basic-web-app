<?php
include("menu.php");
require "./funciones/conecta.php";

$con = conecta();
$id = $_REQUEST['id'];
//sirve para ver los pedidos 
//sp es un subnombre
$sql = `
    SELECT pe.id, pe.total, pe.cerrado, pp.id_producto, pp.costo, pp.cantidad 
    FROM pedidos AS pe
    LEFT JOIN pedido_producto AS pp
    ON pe.id = $id AND pe.id = pp.id_pedido
`;
$sql = "SELECT * FROM pedidos WHERE id =$id";

$res = $con->query($sql);
$row = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de pedido</title>
</head>

<body>
    <div class="row justify-content-center mt-4">
        <table class="table table-hover table-sm mx-4">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">P/U</th>
                    <th scope="col">QTY</th>
                </tr>
            </thead>
            <tbody class="table table-hover">
                <?php while ($row = $res->fetch_array()) { ?>
                    <tr class="table-primary  table-hover">
                        <td> <?php echo $row["id_producto"] ?>   </td>
                        <td> <?php echo $row["costo"] ?>         </td>
                        <td> <?php echo $row["cantidad"] ?>      </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a class="btn btn-outline-warning" href="./pedidos_lista.php">Regresar a Listado de pedidos</a><br>
    </div>
</body>

</html>