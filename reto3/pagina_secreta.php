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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Concedido</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background-image: url('../media/space_background.jpg'); /* Asegúrate de tener esta imagen en la ruta correcta */
            background-size: cover;
            background-repeat: no-repeat;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        p {
            font-size: 1.5em;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .code {
            font-size: 2em;
            color: #feda4a;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <h1>¡Acceso concedido!</h1>
    <p>El código de acceso es: <strong class="code">Obi-Wan el mejor</strong></p>
    <p>¡Que la fuerza te acompañe!</p>
</body>
</html>