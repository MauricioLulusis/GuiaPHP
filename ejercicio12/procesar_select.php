<?php
$nombre = htmlspecialchars($_POST['nombre']);
$ingresos = $_POST['ingresos'];

echo "Nombre: $nombre<br>";
echo "Ingresos mensuales: $ingresos<br>";

if ($ingresos == ">3000") {
    echo "Debe pagar impuestos a las ganancias.";
} else {
    echo "No debe pagar impuestos a las ganancias.";
}
?>
