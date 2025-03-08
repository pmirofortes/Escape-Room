<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Batalla por Wakanda</title>
</head>
<body>
    <h1>La Batalla por Wakanda</h1>
    <p>El mundo está en peligro. Tras la última batalla de los Vengadores, las fuerzas oscuras que amenazan con destruir la paz y el orden han comenzado a tomar forma. La única esperanza de detenerlos está en un metal muy valioso, cuyo poder es más grande que cualquier otro conocido. Este metal, que solo se encuentra en un lugar secreto, es la clave para restaurar el equilibrio.</p>
    <p>Para conseguirlo, necesitas la ayuda de los Jabari, una de las tribus más poderosas de Wakanda. Pero los Jabari no confían en los extraños fácilmente. El líder de la tribu, M'Baku, te desafiará con una prueba de sabiduría. Si no logras resolver la adivinanza ancestral de su pueblo, no tendrás acceso al conocimiento que necesitas para completar tu misión.</p>
    <p>El futuro de Wakanda y del mundo está en tus manos. Debes resolver la adivinanza para avanzar.</p>


    <p><em>"Soy el más fuerte de los metales, pero no me verás brillar en el sol. Nací en las entrañas de la Tierra, pero solo en Wakanda soy conocido. Mi valor es incalculable, y en las manos de un héroe, mi poder es infinito. ¿Qué soy?"</em></p>
    <form action="../back/procesar.php" method="post">
        <input type="text" name="adivinanza" required>
        <input type="submit" name="reto1" value="Enviar">
    </form>
    <?php
    if (isset($_GET["pista"])){
        echo "<p style='color: red;'>Error, piensa en el metal más poderoso y VIBRANTE </p>"; // Pista provisional
    }

    if (isset($_GET["error"])){
        echo "<p style='color: red;'>Te has pasado de listo. </p>";
    }
    ?>
</body>
</html>