
function saltarIntroRT1() {
    // Ocultar los elementos de la introducción
    document.querySelector(".titulo").style.opacity = "0";
    document.querySelector(".titulo").style.visibility = "hidden";
    document.querySelector(".titulo").style.height = "0";
    document.querySelector(".titulo").style.overflow = "hidden";

    document.querySelector(".mensaje-introduccion").style.opacity = "0";
    document.querySelector(".mensaje-introduccion").style.visibility = "hidden";
    document.querySelector(".mensaje-introduccion").style.height = "0";
    document.querySelector(".mensaje-introduccion").style.overflow = "hidden";

    document.querySelector(".holograma3").style.opacity = "0";
    document.querySelector(".holograma3").style.visibility = "hidden";
    document.querySelector(".holograma3").style.height = "0";
    document.querySelector(".holograma3").style.overflow = "hidden";

    // Mostrar los elementos principales
    document.querySelector(".holograma1").style.opacity = "1";
    document.querySelector(".holograma1").style.visibility = "visible";
    document.querySelector(".holograma1").style.height = "auto";

    document.querySelector(".holograma2").style.opacity = "1";
    document.querySelector(".holograma2").style.visibility = "visible";
    document.querySelector(".holograma2").style.height = "auto";

    document.querySelector("form").style.opacity = "1";
    document.querySelector("form").style.visibility = "visible";
    document.querySelector("form").style.height = "auto";

    document.querySelector("p.pista").style.opacity = "1";
    document.querySelector("p.pista").style.visibility = "visible";
    document.querySelector("p.pista").style.height = "auto";

}
function saltarIntroRT2() {
    document.querySelector(".fondo").style.opacity = "0";
    document.querySelector(".fondo").style.visibility = "hidden";
    document.querySelector(".fondo").style.height = "0";
    document.querySelector(".fondo").style.overflow = "hidden";

    document.querySelector(".introduccion").style.opacity = "0";
    document.querySelector(".introduccion").style.visibility = "hidden";
    document.querySelector(".introduccion").style.height = "0";
    document.querySelector(".introduccion").style.overflow = "hidden";
     

    document.querySelector(".mision").style.opacity = "1";
    document.querySelector(".mision").style.visibility = "visible";

    document.querySelector(".holograma").style.opacity = "1";
    document.querySelector(".holograma").style.visibility = "visible";

    document.querySelector(".fondo-final").style.opacity = "1";
    document.querySelector(".fondo-final").style.visibility = "visible";

    document.querySelector(".padlock").style.opacity = "1";
    document.querySelector(".padlock").style.visibility = "visible";

    document.querySelector(".code-input").style.opacity = "1";
    document.querySelector(".code-input").style.visibility = "visible";

    document.querySelector(".buttons").style.opacity = "1";
    document.querySelector(".buttons").style.visibility = "visible";

    document.querySelector("#timer").style.opacity = "1";
    document.querySelector("#timer").style.visibility = "visible";
}