function agregar_producto(id_pedido, id_producto, costo, cantidad) {
    if (cantidad > 0) return false;
    else {
        $.ajax({
            url: '../administrador/funciones/pedidos/agregar_producto_pedido.php',
            type: 'post',
            dataType: 'text',
            data: { id_pedido, id_producto, costo, cantidad },
            success: function (res) {
                if (res == 0) {
                    $("#producto_error").fadeIn();
                    setTimeout(() => { $("#producto_error").fadeOut(1500); }, 5000);
                }
            }, error: function () {
                alert('Error archivo no encontrado...')
            }
        });
    }
}