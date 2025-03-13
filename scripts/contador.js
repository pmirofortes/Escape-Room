let timeLeft = 10;

function updateTimer() {
    document.getElementById("timer").textContent = "Tiempo restante: " + timeLeft + "s";
    if (timeLeft === 0) {
        let currentPath = window.location.pathname;
        let motivo = "";

        if (currentPath.includes("reto2.php")) {
            motivo = "compactador_tiempo";
        } else if (currentPath.includes("reto3.php")) {
            motivo = "base_echo_tiempo";
        } else if (currentPath.includes("reto4.php")) {
            motivo = "estrella_tiempo";
        }

        window.location.href = `../front/gameover.php?motivo=${motivo}`; // Redirige a otra página al acabar el tiempo
    } else {
        timeLeft--;
        setTimeout(updateTimer, 1000);
    }
}

function addNumber(num) {
    let input = document.getElementById("code");
    if (input.value.length < 3) {
        input.value += num;
    }
}

function clearInput() {
    document.getElementById("code").value = "";
}

window.onload = updateTimer;