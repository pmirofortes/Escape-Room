<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape del imperio</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">
    <style>
        body {
        width: 100%;
        height: 100%;
        background: #000;
        overflow: hidden;
        background-image: url('./media/fondoEstrellas.jpg');
        }

        .fade {
        position: relative;
        width: 100%;
        min-height: 60vh;
        top: -25px;
        background-image: linear-gradient(0deg, transparent, black 75%);
        z-index: 1;
        }

        .star-wars {
        display: flex;
        justify-content: center;
        position: relative;
        height: 800px;
        color: #feda4a;
        font-family: 'Pathway Gothic One', sans-serif;
        font-size: 500%;
        font-weight: 600;
        letter-spacing: 6px;
        line-height: 150%;
        perspective: 400px;
        text-align: justify;
        }

        
        .crawl {
        position: relative;
        top: 99999px;
        transform-origin: 50% 100%;
        animation: crawl 60s linear;
        }

        .crawl > .title {
        font-size: 90%;
        text-align: center;
        }

        .crawl > .title h1 {
        margin: 0 0 100px;
        text-transform: uppercase;
        }

        @keyframes crawl {
        0% {
            top: -100px;
            transform: rotateX(20deg)  translateZ(0);
        }
        100% { 
            top: -6000px;
            transform: rotateX(25deg) translateZ(-2500px);
        }
        }

        /* Título fijo oculto al inicio */
        .titulo-fijo {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 170, 255, 0.2);
            color: #00aaff;
            padding: 20px 40px;
            border: 2px solid rgba(0, 170, 255, 0.8);
            border-radius: 10px;
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 0 15px rgba(0, 170, 255, 0.8);
            text-align: center;
            opacity: 0;
            
            /* Animación */
            animation: aparecerTitulo 2s ease-in-out forwards;
            animation-delay: 60s; /* Se activa tras la animación Star Wars */
        }

        /* Animación para hacer aparecer el título */
        @keyframes aparecerTitulo {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .boton-empezar {
            position: fixed;
            top: 60%;
            left: 43.5%;
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
            opacity: 0;

            animation: aparecerBoton 2s ease-in-out forwards;
            animation-delay: 60s;
        }
        @keyframes aparecerBoton {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .boton-empezar::before {
            content: "";
            position: absolute;
            top: -100%;
            left: -100%;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, rgba(0, 170, 255, 0.3) 10%, transparent 80%);
            transition: all 0.5s ease-in-out;
        }

        /* Efecto al pasar el mouse */
        .boton-empezar:hover {
            background: rgba(0, 170, 255, 0.3);
            box-shadow: 0 0 20px rgba(0, 170, 255, 0.8), 0 0 40px rgba(0, 170, 255, 0.6);
            transform: scale(1.05);
        }

        .boton-empezar:hover::before {
            top: 0;
            left: 0;
        }


        /* Botón flotante en la esquina inferior derecha */
        .boton-saltar {
        position: fixed;
        bottom: 20px;
        right: 20px;
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
        }

        /* Efecto de resplandor interno */
        .boton-saltar::before {
            content: "";
            position: absolute;
            top: -100%;
            left: -100%;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, rgba(0, 170, 255, 0.3) 10%, transparent 80%);
            transition: all 0.5s ease-in-out;
        }

        /* Efecto al pasar el mouse */
        .boton-saltar:hover {
            background: rgba(0, 170, 255, 0.3);
            box-shadow: 0 0 20px rgba(0, 170, 255, 0.8), 0 0 40px rgba(0, 170, 255, 0.6);
            transform: scale(1.05);
        }

        .boton-saltar:hover::before {
            top: 0;
            left: 0;
        }

        .fondo-final {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('./media/vader.jpg') center/cover no-repeat;
            opacity: 0;
            z-index: -1; /* Para que esté detrás de todo */
            animation: fadeIn 3s ease-in-out forwards;
            animation-delay: 60s; /* Aparece después del scroll */
        }

        /* Animación para mostrar el fondo */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 0.5; } /* Ajusta la transparencia de la imagen */
        }
    </style>
</head>
<body>
    <div class="fade"></div>

    <section class="star-wars">
        <div class="crawl" id="crawlText">
            <div class="title">
                <p>La Aventura rebelde</p>
                <h1>Escape del Imperio</h1>
            </div>
            
            <p>La galaxia está en guerra. La Rebelión, liderada por la princesa Leia, Luke Skywalker y Han Solo, se enfrenta a la imponente Fuerza del Imperio Galáctico, comandado por Darth Vader y el Emperador Palpatine. La Alianza Rebelde ha robado los planos de la Estrella de la Muerte, una estación espacial de destrucción masiva, y los ha escondido en un droide llamado R2-D2.</p>

            <p>Ahora, el destino de la galaxia depende de un grupo selecto de rebeldes. Han sido enviados en una misión crucial: infiltrarse en las instalaciones imperiales, recuperar los planos secretos y destruir los planes del Imperio de una vez por todas. Sin embargo, las fuerzas del Imperio no se lo pondrán fácil. La persecución por todo el espacio llevará a los rebeldes a planetas como Tatooine, Hoth y Endor, enfrentándose a terribles desafíos en el camino.</p>

            <p>Tu misión, como parte de este grupo de valientes, es atravesar los obstáculos, resolver enigmas y superar las pruebas que el Imperio ha dejado en su camino. Solo con astucia, valentía y trabajo en equipo podrás obtener los planos de la Estrella de la Muerte y cambiar el destino de la galaxia para siempre.</p>
        </div>
    </section>
    
    <div class="titulo-fijo">ESCAPE DEL IMPERIO</div>

    <a href="./front/reto1.php" class="boton-empezar" target="_blank">Empezar Misión</a>

    <!--  He creado el boton con el css directamente y he linkeado el class -->
    <a href="./front/reto1.php" class="boton-saltar" target="_blank">Saltar a la Misión</a>

    <div class="fondo-final"></div>

    
    <audio id="backgroundMusic" autoplay loop>
    <source src="./media/intro.mp3" type="audio/mpeg">
    
    </audio>

    <?php
    //mensaje para no poder hacer trampas
    if (isset($_GET["pillo"])){
        echo "<p style='color: red;'>Te has pasado de listo. </p>";
    }
    ?>
</body>
</html>