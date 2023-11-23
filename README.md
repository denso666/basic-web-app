### Proyecto Programación para Internet

# Administrador
## Productos
- [x] Alta - Código único
- [x] Listado
- [x] Edición - Código único
- [x] Eliminación
- [x] Detalle

## Banners
- [x] Alta
- [x] Listado
- [x] Edición - revisar el editar foto- no guarda la foto editada
- [x] Detalle
- [x] Eliminación
- [x] Agregar al menú

## Pedidos
- [x] Listado
- [ ] Detalle
  - Verificar que la query funcione (no se ha probado)
  - Verificar que si traiga los pedidos cerrados (no se agrego sentencia WHERE).

# Cliente
## Productos
- [ ] Home 
  - [ ] Mostrar un banner aleatorio, puede realizarse con select y `ORDER BY RAND`
  - [ ] Mostrar 3/6 productos aleatorios, puede realizarse con select y `ORDER BY RAND`
  - [ ] Los productos deben tener el boton [agregar al carrito] y [cantidad] el cual debera ser un campo numerico con minimo 0 y máximo la cantidad del producto
  - Al presionar el botón [agregar al carrito] se debe crear un registro en la tabla `pedido_producto` con el `id_pedido` que se encuentre en la sesión actual
  - Si no existe un `id_pedido` en la sesion, debe lanzarse un script o funcion de php que realize el registro en la tabla `pedidos` y usar el id de ese nuevo pedido
- [ ] Productos
  - [ ] Regilla con todos los producots ordenados en filas (de 3 o 6) aleatoriamente, esto se puede realizar con select y `ORDER BY RAND`
  - [ ] Producto - Tarjeta con boton [agregar al carrito] y [catidad], con el botón bloqueado si dicho productos está agotado
- [ ] Contacto - Formulario de contacto
    - [ ] Función que envíe el email adecuadamente, mediante SMTP
- [ ] Carrito
  - Listado de productos que se han agregado al carrito desde la lista de productos
  - Crear una variable de sesión donde se nos indique el ID del pedido abierto `$_SESSION["id_pedido"]`
  - Si la variable no está seteada, tomar ejemplo del uso de sesión en el administrador, lanzar un script que cree un nuevo pedido y setear ese nuevo `id_pedido` en al sesión actual.
  - [ ] Botón con [finalizar compra] el cual cierra el pedido y elimina la variable `$_SESSION["id_pedido"]`, para referenciar a que no hay pedido actual en la sesión
