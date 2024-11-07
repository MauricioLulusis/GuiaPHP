<?php
$contrato = htmlspecialchars($_POST['contrato']);
echo "<h2>Contrato completado:</h2>";
echo nl2br($contrato);
?>
