<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Dilema de Ultrón</title>
</head>
<body>
    <h1>El Dilema de Ultrón</h1>
    <p>Las anomalías temporales han liberado a Ultron en una línea temporal donde los Vengadores nunca existieron. Ha tomado el control de la Torre Stark y está a punto de activar un protocolo de autodestrucción que colapsará esta realidad, permitiéndole saltar a otras dimensiones para conquistar el multiverso.</p>
        <p>Antes de desaparecer, Kang dejó un mensaje oculto en el sistema central de Ultron, un código cifrado que puede desactivar la explosión. Sin embargo, la IA ha reforzado su seguridad con un complejo algoritmo de encriptación.</p>
        <p><strong>Tu misión:</strong> Descifrar el código antes de que la cuenta atrás llegue a cero.</p>

    <img src="../media/crack.png" alt="crack">  <!-- imagen provisional haremos la nuestra -->
    <form action="../back/procesar.php" method="post">
        <input type="number" name="n1" required>
        <input type="number" name="n2" required>
        <input type="number" name="n3" required>
        <input type="submit" name="reto2" value="Enviar">
    </form>
    <?php
    if (isset($_GET["pista"])){
        echo "<p style='color: red;'>Error, prueba con 1XX </p>"; // Pista provisional
    }

    if (isset($_GET["error"])){
        echo "<p style='color: red;'>Te has pasado de listo. </p>";
    }
    ?>
</body>
</html>