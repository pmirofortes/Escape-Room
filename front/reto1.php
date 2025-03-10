<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El mensaje oculto de la princesa Leia</title>
    <link rel="icon" href="../media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <h1>El mensaje oculto de la princesa Leia</h1>
    <p></p>
    <img src="../media/strange_code.png" alt="strange"> 
    <form action="../back/procesar.php" method="post">
        "<input type="text" name="p1" required maxlength="3">
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
        <input type="text" name="p13" required maxlength="4">!
        <input type="submit" name="reto3" value="Enviar">
    </form>
    imagen bg tatooine

    respuesta : "Que la fuerza te acompañe, viaja a Alderaan y busca a Han Solo!"

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