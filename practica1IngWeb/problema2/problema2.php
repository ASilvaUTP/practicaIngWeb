<!DOCTYPE html>
<html>
<head>
    <title>Problema 2 - Foreach</title>
</head>
<body>

<?php
// Ejemplo de PHP foreach() para recorrer arrays

// Crear array asociativo con posiciones y nombres de jugadores
$equipo = array(
    'portero' => 'Cech', 
    'defensa' => 'Terry', 
    'medio' => 'Lampard', 
    'delantero' => 'Torres'
);

// Recorrer el array e imprimir cada posición con su jugador
foreach ($equipo as $posicion => $jugador) {
    echo "El " . $posicion . " es " . $jugador . "<br>";
}
?>

</body>
</html>