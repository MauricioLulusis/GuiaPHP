<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificación de Clave</title>
</head>
<body>
    <h2>Ingrese su usuario y clave</h2>
    <form action="procesar_clave.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="clave1">Clave:</label>
        <input type="password" id="clave1" name="clave1" required><br><br>

        <label for="clave2">Repita la Clave:</label>
        <input type="password" id="clave2" name="clave2" required><br><br>

        <input type="submit" value="Verificar">
    </form>
</body>
</html>
