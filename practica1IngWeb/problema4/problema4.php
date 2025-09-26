<!DOCTYPE html>
<html>
<head>
    <title>Problema 4 - Sumar Números</title>
</head>
<body>

<?php
// Array con números
$numeros = [1, 5, 13, 50];

// Inicializar variables
$posicion = 0;
$suma = 0;

// Sumar las posiciones de un array hasta que llegue a 10
while ($posicion < count($numeros) && $suma < 10) {
    $suma += $numeros[$posicion];
    $posicion++;
}

echo "La suma a la que he llegado es {$suma}";
?>

</body>
</html>