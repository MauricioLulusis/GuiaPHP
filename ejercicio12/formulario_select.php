<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Select</title>
</head>
<body>
    <h2>Ingrese su nombre e ingresos mensuales</h2>
    <form action="procesar_select.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label>Ingresos mensuales:</label>
        <select name="ingresos">
            <option value="1-1000">1-1000</option>
            <option value="1001-3000">1001-3000</option>
            <option value=">3000">Mayor a 3000</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
