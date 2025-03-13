let timeLeft = 60;
        function updateTimer() {
            document.getElementById("timer").textContent = "Tiempo restante: " + timeLeft + "s";
            if (timeLeft === 0) {
                window.location.href = "../front/gameover.php?motivo=compactador_tiempo"; // Redirige a otra página al acabar el tiempo
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