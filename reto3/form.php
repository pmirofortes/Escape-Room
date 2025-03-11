<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Denegado</title>
</head>
<body>
    <h2>Acceso denegado. Por favor, contesta las preguntas para iniciar sesión.</h2>
    <p>Para confirmar que no eres del Imperio, responde la siguiente pregunta:</p>
    <p><strong>¿Qué significa C-3PO?</strong></p>
    
    <form action="val.php" method="post">
        <label>
            <input type="radio" name="respuesta" value="1"> Comandante 3 Progreso Original
        </label>
        <br>
        <label>
            <input type="radio" name="respuesta" value="2"> Droide de protocolo 3
        </label>
        <br>
        <label>
            <input type="radio" name="respuesta" value="3"> Cientifico 3 Progreso
        </label>
        <br>
        <label>
            <input type="radio" name="respuesta" value="4"> C-3P Original
        </label>
        <br><br>
        <button type="submit">Enviar respuesta</button>
    </form>
</body>
</html>
