<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../Vista/style.css">
    <link rel="stylesheet" type="text/css" href="../Vista/mediaQuery.css">
    <title>Carrito</title>
</head>
<body>
<?php
include '../Controlador/controlador_carrito.php';
// print_r($_SESSION['arrayReserva']);
?>
<h2 class="mt-4 mb-4">Seleccione los extras de las habitaciones:</h2>
<form id="formulario" class="shadow p-3 mb-5 bg-body rounded" method="post">
  <div>
    <h5>Late CheckOut +20€ x habitación:</h5>
    <div class="form-check form-check-inline">
      <input type="radio" id="lateCheckOutNo" name="lateCheckOut" value="No" class="form-check-input" checked>
      <label for="lateCheckOutNo" class="form-check-label">No</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" id="lateCheckOutSi" name="lateCheckOut" value="Si" class="form-check-input">
      <label for="lateCheckOutSi" class="form-check-label">Si</label>
    </div>
  </div>
  <div>
    <h4>Todo Incluido +100€ x noche:</h4>
    <div class="form-check form-check-inline">
      <input type="radio" id="todoIncluidoNo" name="todoIncluido" value="No"  class="form-check-input" checked>
      <label for="todoIncluidoNo" class="form-check-label">No</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" id="todoIncluidoSi" name="todoIncluido" value="Si"  class="form-check-input">
      <label for="todoIncluidoSi" class="form-check-label">Si</label>
    </div>
  </div>
  <div>
    <h4>Recogida/Ida Aeropuerto Madrid Barajas(75€):</h4>
    <div class="form-check form-check-inline">
      <input type="radio" id="aeropuertoNo" name="aeropuerto" value="No"  class="form-check-input" checked>
      <label for="aeropuertoNo" class="form-check-label">No</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" id="aeropuertoSi" name="aeropuerto" value="Si"  class="form-check-input">
      <label for="aeropuertoSi" class="form-check-label">Si</label>
    </div>
  </div>
  <div>
    <input type="hidden" name="precioEscondido" id="preciototal" value="<?=$precioTotal?>">
    <input type="hidden" name="totalHabitaciones" id="totalHabitaciones" value="<?=$_SESSION['arrayReserva']['numeroHabitaciones']?>">
    <input type="hidden" name="totalNoches" id="totalNoches" value="<?=$_SESSION['arrayReserva']['numeroDias']?>">

    
    <h4>Precio Total:</h4>
    <h2 id="precio" class=""><?=($precioTotal)?>€</h2>
  </div>
  <button type="submit" name="btn_enviar_extras_admin">Confirmar</button>
</form>

<script>
  const precioBase = parseInt(document.getElementById('preciototal').value);
  const numeroHabitaciones = parseInt(document.getElementById('totalHabitaciones').value);
  const numeroNoches = parseInt(document.getElementById('totalNoches').value);

  console.log(precioBase);
  const preciosAdicionales = {
    lateCheckOut: 20*numeroHabitaciones,
    todoIncluido: 100*numeroNoches,
    aeropuerto: 75
    // pagoAhora: -10
  }

  const formulario = document.getElementById('formulario');
  const precioElemento = document.getElementById('precio');
  const precioElementoFinalEscondido = document.getElementsByName('precioEscondido')[0];

  formulario.addEventListener('change', () => {
    let precioTotal = precioBase;

    for (const [opcion, precio] of Object.entries(preciosAdicionales)) {
      const input = document.querySelector(`input[name=${opcion}]:checked`);
      if (input.value === 'Si') {
        precioTotal += precio;
      } 

    }

    precioElemento.textContent = precioTotal + '€';
    precioElementoFinalEscondido.value = precioTotal;
  });
</script>
</body>
</html>