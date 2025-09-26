<!DOCTYPE html>
<html>
<head>
    <title>Problema 3 - Parsear XML</title>
</head>
<body>

<?php
// Cargar y parsear el archivo XML
$xml = simplexml_load_file("NOMBRE.xml");

// Recorrer cada elemento 'color' del XML con foreach
foreach ($xml->color as $color) {
    echo "El color " . $color->nombre . " tiene el código hexadecimal " . $color->codigo_hexadecimal . "<br>";
}
?>

</body>
</html>