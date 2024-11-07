<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Checkbox</title>
</head>
<body>
    <h2>Ingrese su nombre y seleccione los deportes que practica</h2>
    <form action="procesar_checkbox.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label>Deportes:</label><br>
        <input type="checkbox" name="deportes[]" value="Futbol"> Fútbol<br>
        <input type="checkbox" name="deportes[]" value="Basket"> Basket<br>
        <input type="checkbox" name="deportes[]" value="Tennis"> Tennis<br>
        <input type="checkbox" name="deportes[]" value="Voley"> Voley<br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
