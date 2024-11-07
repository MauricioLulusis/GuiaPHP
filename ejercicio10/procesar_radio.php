<?php
$nombre = htmlspecialchars($_POST['nombre']);
$estudios = $_POST['estudios'];

echo "Nombre: $nombre<br>";
echo "Tipo de estudios: ";

switch ($estudios) {
    case '1':
        echo "No tiene estudios";
        break;
    case '2':
        echo "Estudios primarios";
        break;
    case '3':
        echo "Estudios secundarios";
        break;
    default:
        echo "No especificado";
}
?>
