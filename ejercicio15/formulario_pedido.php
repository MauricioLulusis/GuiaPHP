<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedido de Pizza</title>
</head>
<body>
    <h2>Realizar Pedido de Pizza</h2>
    <form action="procesar_pedido.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="text" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" class="text" required><br><br>

        <label>Tipos de Pizza:</label><br>
        <input type="checkbox" name="tipos[]" value="Jamón y queso"> Jamón y queso<br>
        <input type="checkbox" name="tipos[]" value="Napolitana"> Napolitana<br>
        <input type="checkbox" name="tipos[]" value="Muzzarella"> Muzzarella<br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" class="text" required><br><br>

        <input type="submit" value="Confirmar Pedido">
    </form>
</body>
</html>
