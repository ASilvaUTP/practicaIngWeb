<?php
// Verificamos si se recibieron datos por POST
if ($_POST) {
    // Recorremos cada valor enviado desde el formulario
    foreach ($_POST as $clave => $valor) {
        echo "El valor de $clave es: $valor <br>";
    }
}
?>
