<?php
session_start(); 
// RETO 1
if (isset($_POST["reto1"]) &&
    strtolower(str_replace(' ', '', $_POST["p1"])) == "que" &&
    strtolower(str_replace(' ', '', $_POST["p2"])) == "la" &&
    strtolower(str_replace(' ', '', $_POST["p3"])) == "fuerza" &&
    strtolower(str_replace(' ', '', $_POST["p4"])) == "te" &&
    strtolower(str_replace(' ', '', $_POST["p5"])) == "acompañe" &&
    strtolower(str_replace(' ', '', $_POST["p6"])) == "viaja" &&
    strtolower(str_replace(' ', '', $_POST["p7"])) == "a" &&
    strtolower(str_replace(' ', '', $_POST["p8"])) == "alderaan" &&
    strtolower(str_replace(' ', '', $_POST["p9"])) == "y" &&
    strtolower(str_replace(' ', '', $_POST["p10"])) == "busca" &&
    strtolower(str_replace(' ', '', $_POST["p11"])) == "a" &&
    strtolower(str_replace(' ', '', $_POST["p12"])) == "han" &&
    strtolower(str_replace(' ', '', $_POST["p13"])) == "solo")
{
    $_SESSION["reto1"] = "check"; 
    header("Location: ../front/reto2.php"); // Redirigir al reto 2
    exit();
}
else if (isset($_POST["reto1"])){
    header("Location: ../front/reto1.php?pista"); // Redirigir al reto 1 con pista
    exit();
}

// RETO 2
else if (isset($_POST["reto2"]) && $_POST["code"] == 164){
    if (isset($_SESSION["reto1"])) {
        $_SESSION["reto2"] = "check"; 
        header("Location: ../front/reto3.php"); // Redirigir al reto 3
        exit();
    } else {
        header("Location: ../front/reto1.php"); // Redirigir al reto 1 si no se ha completado
        exit();
    }
}else if (isset($_POST["reto2"])){
    header("Location: ../front/gameover.php?motivo=compactador_fallos"); // Redirigir al gameover
    exit();
}

// RETO 3
else if(isset($_POST["reto3"]) && strtolower(str_replace(' ', '', $_POST["codigo"])) == "obi-wanelmejor"){
    if (isset($_SESSION["reto2"])) {
        $_SESSION["reto3"] = "check"; 
        header("Location: ../front/reto4.php"); // Redirigir al reto 4
        exit();
    } else {
        header("Location: ../front/reto2.php"); // Redirigir al reto 2 si no se ha completado
        exit();
    }
}else if (isset($_POST["reto3"])){ 
    header("Location: ../front/gameover.php?base_echo_fallos"); // Redirigir al gameover
    exit();
}

// RETO 4
else if(isset($_POST["reto4"]) && $_POST["alphaX"] == 8 && $_POST["alphaY"] == 6 && $_POST["limaX"] == 3 && $_POST["limaY"] == 4 && $_POST["xrayX"] == 7 && $_POST["xrayY"] == 3){
    if (isset($_SESSION["reto3"])) {
        $_SESSION["reto4"] = "check"; 
        header("Location: ../front/congrats.php"); // Redirigir al reto 5
        exit();
    } else {
        header("Location: ../front/reto3.php"); // Redirigir al reto 3 si no se ha completado
        exit();
    }
}
else if (isset($_POST["reto4"])){
    header("Location: ../front/gameover.php?motivo=batalla_fallos"); // Redirigir al gameover
    exit();
}
?>