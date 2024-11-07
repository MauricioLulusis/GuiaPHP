<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $tipos = isset($_POST['tipos']) ? $_POST['tipos'] : [];
    $cantidad = intval($_POST['cantidad']);

    $pedido = "Nombre: $nombre\n";
    $pedido .= "Dirección: $direccion\n";
    $pedido .= "Tipos de Pizza: " . implode(", ", $tipos) . "\n";
    $pedido .= "Cantidad: $cantidad\n";
    $pedido .= "-----------------------------\n";

    file_put_contents("pedidos.txt", $pedido, FILE_APPEND);

    echo "Pedido guardado exitosamente.";
}
?>
