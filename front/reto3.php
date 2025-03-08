<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Anomalía del Ojo de Agamotto</title>
</head>
<body>
    <h1>La Anomalía del Ojo de Agamotto</h1>
    <p>Las alteraciones en el tiempo han creado un bucle infinito en el que la realidad se desmorona lentamente. Doctor Strange intentó estabilizar la línea temporal con el Ojo de Agamotto, pero Kang alteró el hechizo, dejando una frase encriptada oculta en el flujo temporal.</p>
    <p>Si no descifras el mensaje, el tiempo colapsará sobre sí mismo y quedaremos atrapados en un bucle sin fin. Wong logró recuperar parte del conjuro, pero está encriptado con una antigua técnica oculta en los textos de Kamar-Taj.</p>
    <p><strong>Tu misión:</strong> Romper el código y escribir la frase correcta para restaurar el equilibrio en el tiempo.</p>
    <img src="../media/strange_code.png" alt="strange"> 
    <form action="../back/procesar.php" method="post">
        "<input type="text" name="p1" required maxlength="4">
        <input type="text" name="p2" required maxlength="2">
        <input type="text" name="p3" required maxlength="2">
        <input type="text" name="p4" required maxlength="5">!
        <input type="text" name="p5" required maxlength="8">,
        <input type="text" name="p6" required maxlength="4">
        <input type="text" name="p7" required maxlength="2">
        <input type="text" name="p8" required maxlength="2">
        <input type="text" name="p9" required maxlength="2">
        <input type="text" name="p10" required maxlength="3">!"
        <input type="submit" name="reto3" value="Enviar">
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