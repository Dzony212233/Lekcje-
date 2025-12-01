<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stoper</title>
</head>
<body>
    <div id="timer">00:00:00</div>
    <button id="startBtn">Start</button>
    <button id="stopBtn" disabled>Stop</button>

    <script>
        let timer;
        let hours = 0;
        let minutes = 0;
        let seconds = 0;
        
        function startStoper() {
            timer = setInterval(function () {
                if (seconds == 59) {
                    if (minutes == 59) {
                        hours++;
                        minutes = 0;
                    } else {
                        minutes++;
                    }
                    seconds = 0;
                } else {
                    seconds++;
                }
                let czas = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
                document.querySelector("#timer").innerHTML = czas;
            }, 1000);

            document.querySelector("#startBtn").disabled = true;
            document.querySelector("#stopBtn").disabled = false;
        }

        function stopStoper() {
            clearInterval(timer);

            document.querySelector("#startBtn").disabled = false;
            document.querySelector("#stopBtn").disabled = true;
        }
        
        document.querySelector("#startBtn").addEventListener("click", startStoper);
        document.querySelector("#stopBtn").addEventListener("click", stopStoper);
    </script>
</body>
</html>
