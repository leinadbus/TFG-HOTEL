window.addEventListener('DOMContentLoaded', function() {
    var inputFecha = document.getElementById('fechaEntrada');
    var inputFecha2 = document.getElementById('fechaSalida');
    var fechaActual = new Date();
    var yyyy = fechaActual.getFullYear();
    var mm = String(fechaActual.getMonth() + 1).padStart(2, '0');
    var dd = String(fechaActual.getDate()).padStart(2, '0');
    var dd2 = String(1+ fechaActual.getDate()).padStart(2, '0');
    var fechaMinima = yyyy + '-' + mm + '-' + dd;
    var fechaMinima2 = yyyy + '-' + mm + '-' + dd2;

    inputFecha.min = fechaMinima;

    //RECOGER FECHA SELECCIONADA Y APLICARLA EN EL MINIMO DE SALIDA?????
    inputFecha2.min = fechaMinima2;
});

