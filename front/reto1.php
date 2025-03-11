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
            display: fixed;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('../media/obiwan_r2.png');
            background-repeat: no-repeat; 
            font-family: 'Pathway Gothic One', sans-serif;
        }
        .titulo
        {
            position: fixed;
            top: 5%;
            left: 32.5%;
            transform: translate(-50%, -50%);
            background: rgba(13, 52, 71, 0.78);
            color: #00aaff;
            padding: 20px 40px;
            border: 2px solid rgba(0, 170, 255, 0.8);
            border-radius: 10px;
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 0 15px rgba(0, 170, 255, 0.8);
            text-align: center;
            animation: fadeOut 2s ease-in-out 30s forwards;
        }
        .mensaje-introduccion
        {
            margin: 20px;
            padding: 20px;
            position: fixed;
            top: 20%;
            left: 32.5%;
            transform: translate(-50%, -50%);
            background: rgba(13, 52, 71, 0.78);
            color: #00aaff;
            padding: 20px 40px;
            border: 2px solid rgba(0, 170, 255, 0.8);
            border-radius: 10px;
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 0 15px rgba(0, 170, 255, 0.8);
            text-align: center;
            animation: fadeOut 2s ease-in-out 30s forwards;
        }
        form
        {
            position: relative;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(13, 52, 71, 0.78);
            color: #00aaff;
            padding: 20px 40px;
            border: 2px solid rgba(0, 170, 255, 0.8);
            border-radius: 10px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 0 15px rgba(0, 170, 255, 0.8);
            text-align: center;
            animation: fadeIn 2s ease-in-out 34s forwards;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
        .holograma1 
        {
            position: fixed;
            top: 260px;
            left: 60px;
            width: 80%; 
            filter: brightness(1.3) contrast(1.5) saturate(1.2);
            border-radius: 10px; /* Bordes suaves */
            background: linear-gradient(135deg, rgba(21, 20, 90, 0.56), rgba(51, 152, 199, 0.8), rgba(21, 20, 90, 0.56));
            box-shadow: 0 0 15px rgba(47, 125, 164, 0.73), 
                        0 0 30px rgba(85, 50, 212, 0.6), 
                        0 0 50px rgba(59, 152, 223, 0.4); /* Efecto de resplandor azul marino */
            padding: 10px;
            animation: fadeIn 2s ease-in-out 32s forwards;
        }
        .holograma3
        {
            position: fixed;
            top: 170px;
            right: 510px;
            width: 4%; 
            animation: fadeOut 2s ease-in-out 30s forwards;
        }
        .holograma2 
        {
            position: fixed;
            top: 380px;
            left: 300px;
            width: 45%; 
            filter: brightness(1.3) contrast(1.5) saturate(1.2);
            border-radius: 10px; /* Bordes suaves */
            background: linear-gradient(135deg, rgba(21, 20, 90, 0.56), rgba(51, 152, 199, 0.8), rgba(21, 20, 90, 0.56));
            box-shadow: 0 0 15px rgba(47, 125, 164, 0.73), 
                        0 0 30px rgba(85, 50, 212, 0.6), 
                        0 0 50px rgba(59, 152, 223, 0.4); /* Efecto de resplandor azul marino */
            padding: 10px;
            animation: fadeIn 2s ease-in-out 33s forwards;
        }
        .holograma1, .holograma2, form {
            opacity: 0;
            visibility: hidden;
            height: 0;
            overflow: hidden;
        }
        .boton{
            
            background: rgba(0, 170, 255, 0.1); /* Color azul translúcido */
            color: #00aaff;
            font-family: 'Pathway Gothic One', sans-serif;
            padding: 15px 30px;
            border: 2px solid rgba(0, 170, 255, 0.8);
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            cursor: pointer;
            overflow: hidden;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 0 10px rgba(0, 170, 255, 0.5);
            animation: glow 2s infinite alternate;

            flex-basis: 100%; /* Hace que el botón ocupe toda la línea */
            margin-top: 10px; /* Espaciado superior para separarlo de los inputs */
        }
        /* Animación para desvanecer la introducción */
        @keyframes fadeOut {
            0% { opacity: 1; }
            100% { opacity: 0; visibility: hidden; height: 0; overflow: hidden; }
        }

        /* Animación para hacer aparecer otros elementos */
        @keyframes fadeIn {
            0% { opacity: 0; visibility: hidden; height: 0; overflow: hidden; }
            100% { opacity: 1; visibility: visible; height: auto; }
        }
    </style>
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
        <input class="boton" type="submit" name="reto3" value="ENVIAR CÓDIGO">
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