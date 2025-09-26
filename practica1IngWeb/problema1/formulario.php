<!DOCTYPE html>
<html>
<head>
    <title>Problema 1 - Formulario</title>
</head>
<body>
    <h2>Formulario con método POST</h2>

    <!-- Formulario que envía datos a procesar.php -->
    <form name="formulario" action="procesar.php" method="POST">
        Introduce tu nombre: 
        <input type="text" name="nombre"><br><br>

        Introduce la edad: 
        <input type="text" name="edad"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
