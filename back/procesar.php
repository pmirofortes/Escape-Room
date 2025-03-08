<?php
session_start(); // Iniciar la session, sino no funcionara
if (isset($_POST["reto2"]) && $_POST["n1"] == 1 && $_POST["n2"] == 6 && $_POST["n3"] == 4){
    $_SESSION["reto2"] = "check"; 
    header("Location: ../front/reto3.php"); // Redirigir al reto 3
// RETO 3
}else if (isset($_POST["reto3"]) &&
    strtolower(str_replace(' ', '', $_POST["p1"])) == "esto" &&
    strtolower(str_replace(' ', '', $_POST["p2"])) == "es" &&
    strtolower(str_replace(' ', '', $_POST["p3"])) == "un" &&
    strtolower(str_replace(' ', '', $_POST["p4"])) == "bucle" &&
    strtolower(str_replace(' ', '', $_POST["p5"])) == "recuerda" &&
    strtolower(str_replace(' ', '', $_POST["p6"])) == "esto" &&
    strtolower(str_replace(' ', '', $_POST["p7"])) == "no" &&
    strtolower(str_replace(' ', '', $_POST["p8"])) == "es" &&
    strtolower(str_replace(' ', '', $_POST["p9"])) == "el" &&
    strtolower(str_replace(' ', '', $_POST["p10"])) == "fin"
){
    $_SESSION["reto3"] = "check"; 
    header("Location: ../front/reto4.php"); // Redirigir al reto 4
    exit(); // Asegúrate de que el script se detenga después de la redirección
}
// if (isset($_POST["index"]) && strtolower($_POST["pokemon"]) == "pikachu"){
//     $_SESSION["pantalla1"] = "check"; 
//     header("Location: ../front/pantalla1.php"); // Redirigir a la pantalla 1
// }else if (isset($_POST["index"])){
//     header("Location: ../index.php?n_error=25"); // Redirigir al index
// }else if (isset($_POST["pantalla1"]) && strtolower($_POST["pokemon"]) == "charmander"){
//     $_SESSION["pantalla2"] = "check";
//     header("Location: ../front/pantalla2.php"); // Redirigir a la pantalla 2
// }else if (isset($_POST["pantalla1"])){
//     header("Location: ../front/pantalla1.php?n_error=4"); // Redirigir a la pantalla 1
// }
?>