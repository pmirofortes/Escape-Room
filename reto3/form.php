<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Denegado</title>
    <link type="image/png" sizes="120x120" rel="icon" href="../media/favicon1.png">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background-image: url('../media/space_background.jpg'); /* Asegúrate de tener esta imagen en la ruta correcta */
            background-size: cover;
            background-repeat: no-repeat;
        }

        h2 {
            font-size: 2em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        form {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin: 10px 0;
            font-size: 1.2em;
        }

        button {
            background-color: #feda4a;
            color: #000;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #e5c700;
        }
    </style>
</head>
<body>
    <h2>Acceso denegado. Por favor, contesta las preguntas para iniciar sesión.</h2>
    <p>Para confirmar que no eres del Imperio, responde la siguiente pregunta:</p>
    <p><strong>¿Qué significa C-3PO?</strong></p>
    
    <form action="val.php" method="post">
        <label>
            <input type="radio" name="respuesta" value="1"> Comandante 3 Progreso Original
        </label>
        <label>
            <input type="radio" name="respuesta" value="2"> Droide de protocolo 3
        </label>
        <label>
            <input type="radio" name="respuesta" value="3"> Cientifico 3 Progreso
        </label>
        <label>
            <input type="radio" name="respuesta" value="4"> C-3P Original
        </label>
        <button type="submit">Enviar respuesta</button>
    </form>
</body>
</html>