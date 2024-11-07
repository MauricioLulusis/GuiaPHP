<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $edad = intval($_POST['edad']);

    echo "Nombre: $nombre<br>";
    echo "Edad: $edad<br>";

    if ($edad >= 18) {
        echo "Eres mayor de edad.";
    } else {
        echo "Eres menor de edad.";
    }
}
?>
