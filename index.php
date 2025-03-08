<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El Asedio de Kang</h1>
    <p>El multiverso está colapsando. Kang el Conquistador ha activado el Núcleo Crono-Temporal, una máquina capaz de destruir líneas temporales y reescribir la historia a su antojo. Si no lo detenéis, los eventos clave del UCM serán alterados, borrando a los héroes de la historia.</p>
    <p>Vuestra misión es infiltraros en su fortaleza, la Ciudadela en el Fin de los Tiempos, y sabotear la máquina antes de que se active por completo. Kang ha dejado cuatro protocolos de seguridad, cada uno inspirado en un evento clave del UCM.</p>
    <p>¿Seréis capaces de completar los retos y restaurar el multiverso?</p>
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