function agregar_producto() {
    let id_producto = document.getElementById('id_producto').value;
    let cantidad = document.getElementById('cantidad').value;

    if (cantidad < 0) return false;
    else {
        $.ajax({
            url: '../administrador/funciones/clientes/agregar_producto_pedido.php',
            type: 'post',
            dataType: 'text',
            data: { id_producto, cantidad },
            success: _ => {
                alert('Producto agregado!');
            }, error: function () {
                alert('Error archivo no encontrado...')
            }
        });
    }
}