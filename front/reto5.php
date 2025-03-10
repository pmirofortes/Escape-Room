<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruir la Estrella de la Muerte</title>
    <link rel="icon" href="../media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <h1></h1>


    juego de "marcianos" donde en el eje X se mueve el WingX y en el eje X e Y se mueve el Caza Tie y vamos disparando. Aparece un contador de vidas y un contador de destruir a 10.

    <form>
        <input type="submit" name="reto5" value="Enviar">
    </form>

    imagen bg estrella de la muerte batalla WingX vs Caza Tie
    

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