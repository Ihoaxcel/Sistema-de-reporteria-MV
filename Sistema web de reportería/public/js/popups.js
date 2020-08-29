/*SIGUIENTE*/
$("#ventana5").on('show.bs.modal', function (e) {
    $("#ventana1").modal("hide");
});

$("#ventana2").on('show.bs.modal', function (e) {
    $("#ventana1").modal("hide");
});

$("#ventana3").on('show.bs.modal', function (e) {
    $("#ventana2").modal("hide");
});

$("#ventana4").on('show.bs.modal', function (e) {
    $("#ventana3").modal("hide");
});

$("#ventana5").on('show.bs.modal', function (e) {
    $("#ventana4").modal("hide");
});