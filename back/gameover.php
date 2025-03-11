puedes perder en: 2, 4 y 5. por tiempo o fallos
<?php
if (isset($_GET["motivo"])) {
    $motivo = $_GET["motivo"];
    if ($motivo === "compactador_tiempo") {
        echo "<h1>¡Oh no! ¡Os habéis quedado sin tiempo!</h1>";
        echo "<p>El compactador de basura ha terminado de cerrarse y os ha aplastado. Vuestra aventura ha llegado a su fin.</p>";
        echo "<p>¡Pero no os preocupéis! ¡Podéis volver a intentarlo!</p>";
        echo "<p>Seré bueno y os daré una pista, el código empieza por 1..</p>";
        echo "<a href='../front/reto2.php'>Volver a intentarlo</a>";
    } else if ($motivo === "compactador_fallos") {
        echo "<h1>¡Oh no! ¡Habéis fallado el código!</h1>";
        echo "<p>El compactador de basura ha terminado de cerrarse y os ha aplastado. Vuestra aventura ha llegado a su fin.</p>";
        echo "<p>¡Pero no os preocupéis! ¡Podéis volver a intentarlo!</p>";
        echo "<p>Seré bueno y os daré una pista, el código empieza por 1..</p>";
        echo "<a href='../front/reto2.php'>Volver a intentarlo</a>";
    } else if ($motivo === "hangar_tiempo") {
        echo "<h1>¡Oh no! ¡Os habéis quedado sin tiempo!</h1>";
    } else if ($motivo === "hangar_fallos") {
        echo "<h1>¡Oh no! ¡Habéis cometido demasiados errores!</h1>";
    } else if ($motivo === "hangar_muerte") {
        echo "<h1>¡Oh no! ¡Habéis muerto!</h1>";
    }
}



?>