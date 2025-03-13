<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">
    <link rel="stylesheet" href="../styles/styleReto4.css">
</head>
<body>
    <h1>Sabotear el generador de escudos de la segunda Estrella de la Muerte</h1>
    <p>introduccion a la prueba</p>
    <img> mapa de coordenadas

    <form action="../back/procesar.php" method="POST">
    <input type="number" name="x">
    <input type="number" name="y">
    <input type="number" name="velocidad">
    <input type="submit" class="button"name="reto4" value="Disparar"> //que sea el tipico botn rojo de lanzar
    </form>
    <?php
    if (isset($_GET["pista"])){
        echo "<p></p>"; // Pista provisional
    }

    if (isset($_GET["error"])){
        echo "<p>Te has pasado de listo. </p>"; // Cambiar mensaje
    }
    ?>

</body>
</html>