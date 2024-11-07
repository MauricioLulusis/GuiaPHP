<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Radio</title>
</head>
<body>
    <h2>Ingrese su nombre y el tipo de estudios que posee</h2>
    <form action="procesar_radio.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label>Estudios:</label><br>
        <input type="radio" name="estudios" value="1"> No tiene estudios<br>
        <input type="radio" name="estudios" value="2"> Estudios primarios<br>
        <input type="radio" name="estudios" value="3"> Estudios secundarios<br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
