<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape del Compactador de Basura</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #2c3e50; /* Azul oscuro elegante */
            color: black;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .padlock {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
        }
        .code-input {
            font-size: 2rem;
            text-align: center;
            letter-spacing: 10px;
            background: white;
            color: black;
            border: none;
            width: 120px;
            padding: 5px;
        }
        .buttons {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 10px;
        }
        .buttons button {
            font-size: 1.5rem;
            padding: 10px;
            background: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .buttons button:hover {
            background: #2980b9;
        }
        #timer {
            font-size: 1.5rem;
            color: red;
            margin-bottom: 15px;
        }
    </style>
    <script>
        let timeLeft = 60;
        function updateTimer() {
            document.getElementById("timer").textContent = "Tiempo restante: " + timeLeft + "s";
            if (timeLeft === 0) {
                window.location.href = "../back/gameover.php?motivo=compactador_tiempo"; // Redirige a otra página al acabar el tiempo
            } else {
                timeLeft--;
                setTimeout(updateTimer, 1000);
            }
        }
        
        function addNumber(num) {
            let input = document.getElementById("code");
            if (input.value.length < 3) {
                input.value += num;
            }
        }
        function clearInput() {
            document.getElementById("code").value = "";
        }
        
        window.onload = updateTimer;
    </script>
</head>
<body>
    <h1>Escape del Compactador de Basura</h1>
    <p>La misión ha dado un giro inesperado. Tras encontrar a Han Solo en la cantina de Mos Eisley y convencerlo de que os lleve a Alderaan, el Halcón Milenario ha sido arrastrado por los rayos tractores de la Estrella de la Muerte. Lo que debía ser un simple rescate de la princesa Leia Organa se ha convertido en una carrera desesperada por la supervivencia.</p>
    <p>Tras irrumpir en su celda y liberarla, la huida se complica. Tropas imperiales os acorralan, disparos láser rebotan por los pasillos metálicos y la única escapatoria que encontráis es lanzaros por un conducto de mantenimiento… directo al compactador de basura.</p>
    <p>De repente, un tentáculo emerge y se enrosca alrededor de la pierna de Luke, arrastrándolo hacia las profundidades. Entre forcejeos y disparos fallidos, lográis que el monstruo lo suelte. Pero el alivio dura poco…</p>
    <p>Las paredes del compactador empiezan a cerrarse. No hay escapatoria… a menos que consigáis contactar con vuestros droides. C-3PO y R2-D2 están en la sala de control, pero el sistema de comunicación imperial requiere un código de emergencia para activar el intercomunicador.</p>
    <p>¡Date prisa, el tiempo se agota!</p>
    <div id="timer">Tiempo restante: 60s</div>
    <img src="../media/crack.png" alt="crack">  <!-- Imagen provisional, se reemplazará más adelante -->
    
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
            <button type="submit" name="reto2">Enviar</button>
        </form>
    </div>
    
    <?php
    if (isset($_GET["pista"])){
        echo "<p>Error, prueba con 1XX </p>"; // Pista provisional la pista no va aqui, ira en la pagina de gameover
    }

    if (isset($_GET["error"])){
        echo "<p>Te has pasado de listo.</p>"; // Mensaje ajustable
    }
    ?>
</body>
</html>
