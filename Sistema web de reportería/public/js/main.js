
/*TIMER PARA CERRAR SESION*/
var idleTime = 0;
var finTime = 0;
$(document).ready(function () {
    //Increment the idle time counter every minute.
    var idleInterval = setInterval(tiempoIncremento, 60000); // 1 minute

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        finTime = 0;
        console.log('desde mouse');
    });
    $(this).keypress(function (e) {
        finTime = 0;
        console.log('desde teclado');
    });
});


function tiempoIncremento() {

    console.log(finTime);
    if (finTime > 30) { // VALOR EN MINUTOS
        //URL DE REDIRECCIÓN
        location.href="https://rfd.org.ec/radar2/cerrar";
        //CONTADOR VUELTO A CERO
        finTime = 0;
    }else{
            finTime++; //INCREMENTO POR MINUTO
    }
}
    