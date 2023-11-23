<?php
include "./header.php";

$sql = "SELECT * FROM banners WHERE status = 1 AND eliminado = 0 ORDER BY RAND() LIMIT 1";
$res = $con->query($sql);
$banner = $res->fetch_array();

$sql = "SELECT * FROM productos WHERE status = 1 AND eliminado = 0 ORDER BY RAND() LIMIT 3";
$productos = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- BANNER -->
    <div>
        <img src="../administrador/imagenes/<?php echo $banner['archivo'] ?>" class="card-img">
    </div>
    <!-- PRODUCTO -->
    <?php while ($row = $productos->fetch_array()) { ?>
        <div class="card mb-3">
            <li class="list-group-item" style="max-width: 15rem;">
                <img src="../administrador/imagenes/<?php echo $row['archivo'] ?>" class="card-img">
            </li>
            <div class="card-body">
                <h5 class="card-title">productos</h5>
            </div>
        </div>
    <?php } ?>
</body>

</html>

<?php include "./footer.php"; ?>