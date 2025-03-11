<?php
// Iniciar la sesión
session_start();

// Verificar si la sesión 'acceso' está activa
if (!isset($_SESSION['acceso'])) {
    // Si no tiene acceso, redirigir de vuelta al formulario
    header('Location: form.php');
    exit();
}

// Si el usuario tiene acceso, mostrar la página secreta
echo "<h1>¡Acceso concedido!</h1>";
echo "<p>El codigo de acceso es: <storng>Obi-Wan el mejor</strong></p>";
echo "<p>¡Que la fuerza te acompañe!</p>";

?>
