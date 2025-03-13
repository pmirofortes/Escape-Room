<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defensa de Hoth</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">
    <link rel="stylesheet" href="../styles/styleReto3.css">
</head>
<body>
    <h1 class="titulo">Configurar los escudos de la base rebelde</h1>
    <p class="introduccion">Tras escapar de la Estrella de la Muerte, la Rebelión ha establecido una nueva base en el remoto planeta helado de Hoth.<br><br>
    La Base Echo, oculta entre montañas de nieve y ventiscas implacables, es ahora el último bastión de la Alianza. Pero el Imperio nunca deja de acechar, y una amenaza inminente se cierne sobre vosotros.<br><br>
    Los sensores han detectado movimientos sospechosos en la órbita del planeta. El Alto Mando teme lo peor: una inminente invasión imperial. Los escudos defensivos de la base son la única esperanza para ganar tiempo y permitir la evacuación.<br><br>
    <p class="mision">El oficial que estaba a cargo de los sistemas de seguridad ha tenido que evacuar de emergencia, pero antes de irse dejó una clave en un código QR.<br><br>
    Este código contiene la contraseña correcta para activar los generadores de escudo y proteger la base. Sin embargo, los sistemas de Hoth son antiguos y requieren que la configuración se realice manualmente.</p>
    
    <img class="QR"src="../media/QR.png" alt="QR">
    <p class="instrucciones">Escanea el código QR para obtener la clave y proteger la base.</p>

    <form class="respuesta-user" action="../back/procesar.php" method="POST">
            <input type="text" name="codigo">
            <br>
            <button class="boton-enviar" type="submit" name="reto3">Enviar Código</button>
    </form>

    <div>
        <img class="atat" src="../media/ATAT.jpg" alt="Hoth base Echo vs AT-AT">
        <img class="baseRebelde" src="../media/baseRebelde.jpg" alt="base">
    </div>

    <img class="rebelde" src="../media/rebeldeEspia.png" alt="rebelde">


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