<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Over</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon2.png">
    <link rel="stylesheet" href="../styles/styleGameover.css">
</head>
<body>
<?php
if (isset($_GET["motivo"])) {
    $motivo = $_GET["motivo"];
    if ($motivo === "compactador_tiempo") {
        echo "<h1>¡Oh no! ¡Os habéis quedado sin tiempo!</h1>";
        echo "<p>El compactador de basura ha terminado de cerrarse y os ha aplastado. Vuestra aventura ha llegado a su fin.</p>";
        echo "<p>¡Pero no os preocupéis! ¡Podéis volver a intentarlo!</p>";
        echo "<p class='pista'>Seré bueno y os daré una pista, el código empieza por 1..</p>";
        echo "<a href='../front/reto2.php'>Volver a intentarlo</a>";
    } else if ($motivo === "compactador_fallos") {
        echo "<h1>¡Oh no! ¡Habéis fallado el código!</h1>";
        echo "<p>El compactador de basura ha terminado de cerrarse y os ha aplastado. Vuestra aventura ha llegado a su fin.</p>";
        echo "<p>¡Pero no os preocupéis! ¡Podéis volver a intentarlo!</p>";
        echo "<p class='pista'>Seré bueno y os daré una pista, el código empieza por 1..</p>";
        echo "<a href='../front/reto2.php'>Volver a intentarlo</a>";
    } else if ($motivo === "base_echo_tiempo") {
        echo "<h1>¡Oh no! ¡Os habéis quedado sin tiempo!</h1>";
    } else if ($motivo === "batalla_tiempo") {
        echo "<h1>¡Oh no! ¡Habéis cometido demasiados errores!</h1>";
}
?>
</body>
</html>
