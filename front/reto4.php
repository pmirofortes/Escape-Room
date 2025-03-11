<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <h1>Sabotear el generador de escudos de la segunda Estrella de la Muerte</h1>
    simon dice 2x2 3 rondas a mayor dificultad y 3 codigos de tipo check, cuando superas una ronda se guarda en un formulario

    <form action="../back/procesar.php" method="POST">
    </form>
    <input type="submit" name="reto4" value="Enviar">

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