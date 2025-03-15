<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El mensaje oculto de la princesa Leia</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">
    <link rel="stylesheet" href="../styles/styleReto1.css">
</head>
<body>
    <h1 class="titulo">El mensaje oculto de la princesa Leia</h1>
    <p class="mensaje-introduccion">Tatooine. Un planeta desértico y olvidado en los Territorios del Borde Exterior.<br><br> 
    Pero hoy, este rincón remoto de la galaxia se convierte en el punto de partida de una misión crucial para la Rebelión.<br><br>
    Recién llegados a Mos Eisley, Luke Skywalker y Obi-Wan Kenobi han hecho contacto con R2-D2, el pequeño droide astromecánico que transporta un mensaje vital para la Alianza Rebelde. Entre pitidos y destellos, R2 proyecta un código cifrado, un mensaje en clave que solo los más astutos podrán descifrar.<br><br>
    Tu misión es clara: descifra el contenido del mensaje y avanza en tu camino hacia la Rebelión.</p>
    <img class="holograma1" src="../media/codigo_cifrado.png" alt="codigo cifrado"> 
    <img class="holograma2" src="../media/alfabeto.png" alt="alfabeto"> 
    <img class="holograma3" src="../media/rebeldeEspia.png" alt="robot">
    <form action="../back/procesar.php" method="post">
        <input type="text" name="p1" required maxlength="3">
        <input type="text" name="p2" required maxlength="2">
        <input type="text" name="p3" required maxlength="6">
        <input type="text" name="p4" required maxlength="2">
        <input type="text" name="p5" required maxlength="8">,
        <input type="text" name="p6" required maxlength="5">
        <input type="text" name="p7" required maxlength="1">
        <input type="text" name="p8" required maxlength="8">
        <input type="text" name="p9" required maxlength="1">
        <input type="text" name="p10" required maxlength="5">
        <input type="text" name="p11" required maxlength="1">
        <input type="text" name="p12" required maxlength="3">
        <input type="text" name="p13" required maxlength="4">
        <input class="boton" type="submit" name="reto1" value="ENVIAR CÓDIGO">
    </form>

    <?php
    if (isset($_GET["pista"])){
        echo "<p>Toma papel y lapiz, hazlo poco a poco...</p>";
    }
    ?>
</body>
</html>