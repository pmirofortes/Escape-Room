<?php
// Iniciar la sesión
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener la respuesta seleccionada
    $respuesta = $_POST['respuesta'];

    // Verificar si la respuesta seleccionada es la correcta (en este caso, la respuesta 2)
    if ($respuesta == 2) {
        // Establecer una sesión para indicar que el usuario tiene acceso a la página secreta
        $_SESSION['acceso'] = true;

        // Redirigir al usuario a la página secreta si la respuesta es correcta
        header('Location: pagina_secreta.php');
      
    } else {
        // Redirigir de vuelta a la página original si la respuesta es incorrecta
        header('Location: formulario.php');
     
    }
}
?>
