<?php
$nombre = htmlspecialchars($_POST['nombre']);
$deportes = isset($_POST['deportes']) ? $_POST['deportes'] : [];

echo "Nombre: $nombre<br>";
echo "Cantidad de deportes que practica: " . count($deportes) . "<br>";
if (!empty($deportes)) {
    echo "Deportes: " . implode(", ", $deportes);
}
?>
