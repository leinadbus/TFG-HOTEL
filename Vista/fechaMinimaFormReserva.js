var inputFecha = document.getElementById('fechaEntrada');
    var inputFecha2 = document.getElementById('fechaSalida');
    var fechaActual = new Date();

window.addEventListener('DOMContentLoaded', function() {
    
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
// // var inputFecha = document.getElementById('fechaEntrada');
// // var inputFecha2 = document.getElementById('fechaSalida');
// inputFecha.addEventListener('change', function() {
   
//     var selectedDate = new Date(inputFecha.value);
//     selectedDate.setDate(selectedDate.getDate() + 1);
  
//     var yyyy = selectedDate.getFullYear();
//     var mm = String(selectedDate.getMonth() + 1).padStart(2, '0');
//     var dd = String(selectedDate.getDate()).padStart(2, '0');
//     var fechaSiguiente = yyyy + '-' + mm + '-' + dd;
//   console.log(fechaSiguiente);
//     inputFecha2.min = fechaSiguiente;
//   });