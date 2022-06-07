<html:>

    <head>
        <Title>Projeto Cronometro Javascript</Title>
    </head>
    <link href="styles.css" rel="stylesheet">

    <body>
        <audio id="" src="" style="display: none;"></audio>
        <div class="container">
            <h2>Minutos:</h2>
            <select name="Minutos" id="Minutos"></select>

            <h2>Segundos:</h2>
            <select name="Segundos" id="Segundos"></select>
            <br>
            <br>
            <br>
            <button id="comecar">Começar!</button>
            <div id="display">
                <h3></h3>
            </div>
        </div>
        <script>
            var display = document.getElementById('display');
            var Minutos = document.getElementById('Minutos');
            var Segundos = document.getElementById('Segundos');
            var comecar = document.getElementById('comecar');


            var cronometroSeg;
            var minutoAtual;
            var segundoAtual;

            var interval;

            for (var i = 0; i <= 60; i++) {
                Minutos.innerHTML += '<option value="' + i + '">' + i + '</option>';
            }
            for (var i = 1; i <= 60; i++) {
                Segundos.innerHTML += '<option value="' + i + '">' + i + '</option>';
            }



            comecar.addEventListener('click', function() {
                minutoAtual = Minutos.value;
                segundoAtual = Segundos.value;

                display.childNodes[1].innerHTML = minutoAtual + ":" + segundoAtual;

                interval = setInterval(function() {
                    segundoAtual--;
                    if (segundoAtual <= 0) {
                        if (minutoAtual > 0) {
                            minutoAtual--;
                            segundoAtual = 59;
                        } else {
                            alert("ACABOU!");
                            clearInterval(interval);
                        }
                    }
                    display.childNodes[1].innerHTML = minutoAtual + ":" + segundoAtual;
                }, 1000);

            })
        </script>
    </body>
</html:>