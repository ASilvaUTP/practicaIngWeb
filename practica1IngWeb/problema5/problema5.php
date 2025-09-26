<!DOCTYPE html>
<html>
<head>
    <title>Problema 5 - Bucle</title>
</head>
<body>

<?php
// Array de coches
$next_car = [
    "Porsche 911",
    "Ferrari F355",
    "Mitsubishi EVO",
    "R34 Skyline",
    "C8 Corvette"
];

echo "While Loop<br>";

// Inicializar contador
$i = 0;

// Recorrer array con while hasta encontrar "R34 Skyline"
while ($i < count($next_car)) {
    if ($next_car[$i] != "R34 Skyline") {
        echo $i . "<br>";
        $i++;
        continue; // Salta a la siguiente iteración
    }
    
    echo "That's right. I'm getting a skyline.<br>";
    break; // Sale del bucle cuando encuentra el R34 Skyline
}

echo "Do While Loop<br>";

// Ejemplo con do-while (se ejecuta al menos una vez)
$j = 0;
do {
    if ($next_car[$j] != "R34 Skyline") {
        echo $j . "<br>";
        $j++;
        continue;
    }
    
    echo "That's right. I'm getting a skyline.<br>";
    break;
} while ($j < count($next_car));
?>

</body>
</html>