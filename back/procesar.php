<?php
session_start(); 
// RETO 1
if (isset($_POST["reto1"]) && strtolower($_POST["adivinanza"]) == "vibranium"){
    $_SESSION["reto1"] = "check";
    header("Location: ../front/reto2.php"); // Redirigir al reto 2
}else if (isset($_POST["reto1"])){
    header("Location: ../front/reto1.php?pista"); // Redirigir al reto 1
}
// RETO 2
 if (isset($_POST["reto2"]) && $_POST["n1"] == 1 && $_POST["n2"] == 6 && $_POST["n3"] == 4){
    $_SESSION["reto2"] = "check"; 
    header("Location: ../front/reto3.php"); // Redirigir al reto 3
}else if (isset($_POST["reto2"])){
    header("Location: ../front/reto2.php?pista"); // Redirigir al reto 2
}
// RETO 3
else if (isset($_POST["reto3"]) &&
    strtolower($_POST["p1"]) == "esto" &&
    strtolower($_POST["p2"]) == "es" &&
    strtolower($_POST["p3"]) == "un" &&
    strtolower($_POST["p4"]) == "bucle" &&
    strtolower($_POST["p5"]) == "recuerda" &&
    strtolower($_POST["p6"]) == "esto" &&
    strtolower($_POST["p7"]) == "no" &&
    strtolower($_POST["p8"]) == "es" &&
    strtolower($_POST["p9"]) == "el" &&
    strtolower($_POST["p10"]) == "fin")
{
    $_SESSION["reto3"] = "check"; 
    header("Location: ../front/reto4.php"); // Redirigir al reto 4
    exit(); // Asegúrate de que el script se detenga después de la redirección
}
else if (isset($_POST["reto3"])){
    header("Location: ../front/reto3.php?pista"); // Redirigir al reto 3
}
// RETO 4
?>