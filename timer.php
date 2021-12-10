<script type="text/javascript">

//INICIA CONTADOR //
function IniciarContador() {

    setTimeout("DestruirSesion()", 3600000);

};
//Caduca sesión//
function DestruirSesion() {
    alert('¡Su sesión ha expirado!.');
    location.href = "logout.php";
};

var cronometro;
//TEMPORIZAODR CEDIS= 60 MINUTOS//
function carga() {
    contador_s = 0;
    contador_m = 60;
    s = document.getElementById("segundos");
    m = document.getElementById("minutos");

    cronometro = setInterval(
        function() {
            if (contador_s == 0) {
                contador_s = 59;
                contador_m--;
                m.innerHTML = contador_m;

                if (contador_m == 0) {
                    contador_m = 59;
                };
                

            }
            s.innerHTML = contador_s;
            contador_s--;
        }, 1000);
};

//Iniciar Contador Farmacia=30 minutos //

function IniciarContadorFarma() {

setTimeout("DestruirSesionF()", 1800000);

};
function DestruirSesionF() {
    alert('¡Su sesión ha caducado!.');
    location.href = "logout.php";
};


var cronometro;
//CARGA FARMACIA//
function cargafarma() {
    contador_s = 0;
    contador_m = 30;
    s = document.getElementById("segundos");
    m = document.getElementById("minutos");

    cronometro = setInterval(
        function() {
            if (contador_s == 0) {
                contador_s = 59;
                contador_m--;
                m.innerHTML = contador_m;

                if (contador_m == 0) {
                    contador_m = 29;
                };
                
            }
            s.innerHTML = contador_s;
            contador_s--;
        }, 1000);
};

function detenerse() {
    clearInterval(cronometro);
};

</script>

