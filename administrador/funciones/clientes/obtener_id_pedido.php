<?php
require_once "../conecta.php";

function obtenerID() {
    $id = null;
    $con = conecta();
    $res = $con->query("SELECT * from pedidos WHERE status = 0");
    $row = $res->fetch_array();

    if (empty($row)) {
        $con->query("INSERT INTO pedidos (cerrado) VALUES (0)");
        $id = $con->insert_id;
    }
    else $id = row['id'];
    
    return $id;
}
?>