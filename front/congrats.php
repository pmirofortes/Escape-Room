<?php
session_start();
if (!isset($_SESSION["reto4"])) {
    header("Location: reto4.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final del juego</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">    
    <link rel="stylesheet" href="../styles/styleCongrats.css">
</head>
<body>
<h1 class="titulo">¡Felicidades, rebelde!</h1>
<p class="mensaje-final">¡Enhorabuena! Has completado la misión y has ayudado a la Rebelión a derrotar al Imperio.<br><br> 
    Gracias a tu astucia, valentía y trabajo en equipo, la Estrella de la Muerte ha sido destruida y la galaxia está a salvo una vez más.<br><br>
    Que la fuerza te acompañe!!</p>
<img class="fondo" src="../media/logoRebelde.jpg" alt="logo">
<div class="video-container">
    <iframe 
        src="https://www.youtube.com/embed/XJAtMtfcPj8?autoplay=1&mute=0&controls=1&loop=1&rel=0" 
        frameborder="0" 
        allow="autoplay; encrypted-media" 
        allowfullscreen>
    </iframe>
    <a class="reiniciar-juego" href="../back/replay.php">Volver a empezar</a>
</div>
</body>
</html>