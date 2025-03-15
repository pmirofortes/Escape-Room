<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape del imperio</title>
    <link type="image/png" sizes="120x120" rel="icon" href="./media/favicon1.png">
    <link rel="stylesheet" href="./styles/styleIndex.css">

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