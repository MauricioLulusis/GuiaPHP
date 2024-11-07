<?php
$archivo = "pedidos.txt";

if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    echo "<h2>Pedidos de Pizza</h2>";
    echo nl2br($contenido);
} else {
    echo "No se ha encontrado el archivo de pedidos.";
}
?>
