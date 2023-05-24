<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" type="text/css" href="../Vista/style.css">
    <link rel="stylesheet" type="text/css" href="../Vista/mediaQuery.css">
</head>
<body>
<script src="fechaMinimaFormReserva.js"></script>

<?php
include '../Controlador/controlador_sesion.php';
?>

<h2>Reservar habitación:</h2>
<form method="post" class=" bg-secondary mb-3 text-white p-3">
            <div class="container formularioReserva  bg-secondary text-white form-group row">
                <!-- <form method="post"> -->
                <div class="form_reserva col">
                    <label for="fechaEntrada">Fecha entrada</label>
                    <input type="date" class="form-control" id="fechaEntrada" name="datoFechaInicio" required>
                </div>

                <div class="form_reserva col">
                    <label for="fechaSalida">Fecha Salida</label>
                    <input type="date"  class="form-control" id="fechaSalida" name="datoFechaFin" required>
                </div>

                <!-- <div class="form_reserva col"> -->
                    <!-- <label for="nAdultos">Adultos</label><br /> -->
                    <input type="hidden" class="form-control" name="adultos" id="nAdultos" min="1" max="5" value="1" required>
                <!-- </div>

                <div class="form_reserva col"> -->
                    <!-- <label for="nNiños">Niños (menores 13 años)</label> -->
                    <input type="hidden" class="form-control" name="niños" id="nNiños"  min="0" max="5" value="0" required>
                <!-- </div> -->

                <div class="form_reserva col">
                    <input class="btn btn-primary btn-custom" type="submit" class="submi" name="bton_formulario_fechas_admin">
                </div>
                <!-- </form> -->
            </div>
        </form>
</body>
</html>