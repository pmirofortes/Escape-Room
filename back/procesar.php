<?php
session_start(); 
// RETO 1
if (isset($_POST["reto1"]) &&
    strtolower($_POST["p1"]) == "Que" &&
    strtolower($_POST["p2"]) == "la" &&
    strtolower($_POST["p3"]) == "fuerza" &&
    strtolower($_POST["p4"]) == "te" &&
    strtolower($_POST["p5"]) == "acompañe" &&
    strtolower($_POST["p6"]) == "viaja" &&
    strtolower($_POST["p7"]) == "a" &&
    strtolower($_POST["p8"]) == "Alderaan" &&
    strtolower($_POST["p9"]) == "y" &&
    strtolower($_POST["p10"]) == "busca" &&
    strtolower($_POST["p11"]) == "a" &&
    strtolower($_POST["p12"]) == "Han" &&
    strtolower($_POST["p13"]) == "Solo")
{
    $_SESSION["reto1"] = "check"; 
    header("Location: ../front/reto2.php"); // Redirigir al reto 2
}
else if (isset($_POST["reto1"])){
    header("Location: ../front/reto1.php?pista"); // Redirigir al reto 1
}

// RETO 2
else if (isset($_POST["reto2"]) && $_POST["code"] == 164){
    $_SESSION["reto2"] = "check"; 
    header("Location: ../front/reto3.php"); // Redirigir al reto 3
}else if (isset($_POST["reto2"])){
    header("Location: ../back/gameover.php?motivo=compactador_fallos"); // Redirigir al gameover
}
// RETO 3
else if(isset($_POST["reto3"]) && ($_POST["codigo"]) == "Obi-Wan el mejor"){
    $_SESSION["reto3"] = "check"; 
    header("Location: ../front/reto4.php"); // Redirigir al reto 4
}else if (isset($_POST["reto3"])){ 
    header("Location: ../front/reto3.php?pista"); // Redirigir al reto 3
}
// RETO 4

// RETO 5
?>