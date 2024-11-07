<?php
function verificarClaves($clave1, $clave2) {
    return $clave1 === $clave2;
}

$usuario = htmlspecialchars($_POST['usuario']);
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];

if (verificarClaves($clave1, $clave2)) {
    echo "Bienvenido, $usuario. Las claves coinciden.";
} else {
    echo "Las claves ingresadas son distintas. Por favor, inténtelo de nuevo.";
}
?>
