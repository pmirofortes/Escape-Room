<?php
session_start();
if (!isset($_SESSION["reto3"])) {
    header("Location: reto3.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruir la segunda Estrella de la Muerte</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">
    <link rel="stylesheet" href="../styles/styleReto4.css">
    <script src="../scripts/contador.js"></script>
    <script src="../scripts/jumpIntro.js"></script>
</head>
<body>
    <h1 class="titulo">Destruir la segunda Estrella de la Muerte</h1>
    <p class="introduccion">Hemos conseguido huir de Hoth, un grupo de rebeldes ha saboteado y destruido el generador de escudos de la Segunda Estrella de la Muerte en Endor. <br><br>
    Nuestras fuerzas han lanzado un ataque total con lo que queda de la flota de la Alianza Rebelde contra el Imperio Galáctico y hemos caído en una trampa entre la super estación de combate y la flota Imperial.<br><br>
    Tenemos que acabar ya esta batalla o no habrá esperanza para la galaxia.
    </p> 
    <div>
        <img class="ala-y" src="../media/cockpit.png" alt="Flota Rebelde">
    </div> 
    <p class="mision">Preparate piloto, tu misión ahora es acabar definitivamente con las ambiciones del Imperio, sube a ese Ala-Y y destruye la Segunda Estrella de la Muerte</p>
    <div id="timer">Tiempo restante: 60s</div>
    <div class="estrellaMuerte-container"></div>
    <img class="estrellaMuerte" src="../media/mapa_estrella_muerte.png" alt="Mapa de la Estrella de la Muerte">
    <img class="rebelde" src="../media/rebeldeEspia.png" alt="rebelde">
    <form class="contenedor" action="../back/procesar.php" method="POST">
        <label>Coordenadas de disparo:</label>
        <br>
        <label>Alpha:</label>
        <input type="number" name="alphaX" placeholder="Coordenada X" required>
        <input type="number" name="alphaY" placeholder="Coordenada Y" required>
        <br>
        <label>Lima:</label>
        <input type="number" name="limaX" placeholder="Coordenada X" required>
        <input type="number" name="limaY" placeholder="Coordenada Y" required>
        <br>
        <label>Xray:</label>
        <input type="number" name="xrayX" placeholder="Coordenada X" required>
        <input type="number" name="xrayY" placeholder="Coordenada Y" required>
        <input type="submit" class="button" name="reto4" value="Disparar">
    </form>

    <button class="boton-jump" onclick="saltarIntroRT4()">Saltar Introducción</button>

    <?php
    if (isset($_GET["pista"])){
        echo "<p>Pista: La respuesta está en el mapa.</p>"; // Pista provisional
    }

    if (isset($_GET["error"])){
        echo "<p>Te has pasado de listo. </p>"; // Cambiar mensaje
    }
    ?>
</body>
</html>