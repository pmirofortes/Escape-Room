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
            background-image: url('../media/cockpit.png'); /* Asegúrate de tener esta imagen en la ruta correcta */
            background-size: cover;
            background-repeat: no-repeat;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        form {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="number"] {
            margin: 5px 0;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            width: calc(100% - 22px); /* Ajustar el ancho para el padding */
        }

        input[type="submit"] {
            background-color: #feda4a;
            color: #000;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #e5c700;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border: 2px solid white;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1 class="titulo">Destruir la segunda Estrella de la Muerte</h1>
    <p class="introduccion">Hemos conseguido huir de Hoth, un grupo de rebeldes ha saboteado y destruido el generador de escudos de la Segunda Estrella de la Muerte en Endor. <br><br>
    Nuestras fuerzas han lanzado un ataque total con lo que queda de la flota de la Alianza Rebelde contra el Imperio Galáctico y hemos caído en una trampa entre la super estación de combate y la flota Imperial.<br><br>
    Tenemos que acabar ya esta batalla o no habrá esperanza para la galaxia.
    </p> 
    <p class="mision">Preparate piloto, tu misión ahora es acabar definitivamente con las ambiciones del Imperio, sube a ese Ala-Y y destruye la Segunda Estrella de la Muerte</p>
    <div id="timer">Tiempo restante: 60s</div>
    <img src="../media/mapa_estrella_muerte.png" alt="Mapa de la Estrella de la Muerte">

    <form action="../back/procesar.php" method="POST">
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