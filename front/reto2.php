<?php
session_start();
if (!isset($_SESSION["reto1"])) {
    header("Location: reto1.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape del Compactador de Basura</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">
    <link rel="stylesheet" href="../styles/styleReto2.css">
    <script src="../scripts/contador.js" ></script>
    <script src="../scripts/jumpIntro.js"></script>
</head>
<body>
    <h1 class="titulo">Escape del Compactador de Basura</h1>
    <p class="introduccion">Este mensaje es una pruebaLa misión ha dado un giro inesperado.<br><br> 
    Tras encontrar a Han Solo en la cantina de Mos Eisley y convencerlo de que os lleve a Alderaan, el Halcón Milenario ha sido arrastrado por los rayos tractores de la Estrella de la Muerte. Lo que debía ser un simple rescate de la princesa Leia Organa se ha convertido en una carrera desesperada por la supervivencia.<br><br>
    Tras irrumpir en su celda y liberarla, la huida se complica. Tropas imperiales os acorralan, disparos láser rebotan por los pasillos metálicos y la única escapatoria que encontráis es lanzaros por un conducto de mantenimiento… directo al compactador de basura.<br><br>
    De repente, un tentáculo emerge y se enrosca alrededor de la pierna de Luke, arrastrándolo hacia las profundidades. Entre forcejeos y disparos fallidos, lográis que el monstruo lo suelte. Pero el alivio dura poco…<br><br></p>
    <p class="mision">Las paredes del compactador empiezan a cerrarse. No hay escapatoria… a menos que consigáis contactar con vuestros droides.<br><br>
    C-3PO y R2-D2 están en la sala de control, pero el sistema de comunicación imperial requiere un código de emergencia para activar el intercomunicador.<br><br>
    ¡Date prisa, el tiempo se agota!</p>

    <div class="fondo"></div>
    <div class="fondo-final"></div>

    <img class="holograma" src="../media/rebeldeEspia.png" alt="robot">

    <div id="timer">Tiempo restante: 60s</div>
    <img src="../media/crack.png" class="crack" alt="crack">  <!-- Imagen provisional, se reemplazará más adelante -->
    
    <div class="padlock">
        <h2>Introduce el código</h2>
        <form action="../back/procesar.php" method="POST">
            <input type="text" id="code" name="code" class="code-input" maxlength="3" readonly>
            <div class="buttons">
                <button type="button" onclick="addNumber(1)">1</button>
                <button type="button" onclick="addNumber(2)">2</button>
                <button type="button" onclick="addNumber(3)">3</button>
                <button type="button" onclick="addNumber(4)">4</button>
                <button type="button" onclick="addNumber(5)">5</button>
                <button type="button" onclick="addNumber(6)">6</button>
                <button type="button" onclick="addNumber(7)">7</button>
                <button type="button" onclick="addNumber(8)">8</button>
                <button type="button" onclick="addNumber(9)">9</button>
                <button type="button" onclick="clearInput()">C</button>
                <button type="button" onclick="addNumber(0)">0</button>
            </div>
            <br>
            <button type="submit" class="boton" name="reto2">Enviar</button>
        </form>
    </div>
    
    <button class="boton-jump" onclick="saltarIntroRT2()">Saltar Introducción</button>

    <?php
    if (isset($_GET["error"])){
        echo "<p>Te has pasado de listo.</p>"; // Mensaje ajustable
    }
    ?>
</body>
</html>
