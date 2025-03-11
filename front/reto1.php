<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El mensaje oculto de la princesa Leia</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">
    <link rel="stylesheet" href="../styles/style.css">
    <style>
         body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('../media/obiwan_r2.png');
            background-repeat: no-repeat; /* Evitar que la imagen se repita */
            background-size: cover; /* Ajustar la imagen para que cubra toda la pantalla */
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;

        }
    </style>
</head>
<body>
    <h1>El mensaje oculto de la princesa Leia</h1>
    <p>Tatooine. Un planeta desértico y olvidado en los Territorios del Borde Exterior. Pero hoy, este rincón remoto de la galaxia se convierte en el punto de partida de una misión crucial para la Rebelión.</p>
    <p>Recién llegados a Mos Eisley, Luke Skywalker y Obi-Wan Kenobi han hecho contacto con R2-D2, el pequeño droide astromecánico que transporta un mensaje vital para la Alianza Rebelde. Entre pitidos y destellos, R2 proyecta un código cifrado, un mensaje en clave que solo los más astutos podrán descifrar.</p>
    <p>Tu misión es clara: usar el descifrador adecuado para revelar el contenido del mensaje y avanzar en tu camino hacia la Rebelión.</p>
    <img src="../media/codigo_cifrado.png" alt="codigo cifrado"> 
    <img src="../media/alfabeto.png" alt="alfabeto"> 
    <form action="../back/procesar.php" method="post">
        "<input type="text" name="p1" required maxlength="3">
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
        <input type="text" name="p13" required maxlength="4">!
        <input type="submit" name="reto3" value="Enviar">
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