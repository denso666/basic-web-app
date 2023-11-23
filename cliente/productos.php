<?php
include "./header.php";
require "../administrador/funciones/conecta.php";

$con = conecta();
$sql = "SELECT * FROM productos WHERE status = 1 AND eliminado = 0";

$res = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br>
    <table class="table table-hover table-sm">
        <thead class="table-secondary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Detalle</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody class="table table-hover">
            <?php while ($row = $res->fetch_array()) { ?>
                <tr class="table-primary  table-hover " id="<?php echo $row['id'] ?>">
                    <td>
                        <?php echo $row["id"] ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-success" href="./pedidos_ver.php?id=<?php echo $row['id'] ?>"> Ver
                            detalle</a>
                    </td>
                    <td>
                        <?php echo $row["total"] ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-outline-warning" href="./bienvenido.php">Regresar al menu de inicio</a>
    </div>
</body>
</html>
<?php include "./footer.php"; ?>