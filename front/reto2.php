<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" href="../media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <h1>Escape del compactador de basura</h1>
    <p>
    luego de encontrar a han solo, te reunes con leia y la estrella de la muerte os captura y sois atrapados en un compactador de basura. Las paredes empiezan a cerrarse, debeis descifrar el codigo y decirselo a vuestros droides antes de que sea tarde
    </p>
    añadir un contador para que escapen del compactador de basura
    imagen bg compactador de basura
    <img src="../media/crack.png" alt="crack">  <!-- imagen provisional haremos la nuestra -->
    <form action="../back/procesar.php" method="post">
        <input type="number" name="n1" required>
        <input type="number" name="n2" required>
        <input type="number" name="n3" required>
        <input type="submit" name="reto2" value="Enviar">
    </form>
    <?php
    if (isset($_GET["pista"])){
        echo "<p>Error, prueba con 1XX </p>"; // Pista provisional
    }

    if (isset($_GET["error"])){
        echo "<p>Te has pasado de listo. </p>"; // Cambiar mensaje
    }
    ?>
</body>
</html>