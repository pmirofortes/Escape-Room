<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape del imperio</title>
    <style>
        body {
        width: 100%;
        height: 100%;
        background: #000;
        overflow: hidden;
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

    <form action="front/reto1.php" method="get">
        <button type="submit">Comenzar</button>
    </form>
    
    <?php
    //mensaje para no poder hacer trampas
    if (isset($_GET["pillo"])){
        echo "<p style='color: red;'>Te has pasado de listo. </p>";
    }
    ?>
</body>
</html>