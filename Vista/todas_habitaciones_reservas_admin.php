<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todas habitaciones a reservar Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">

    <script src="fechaMinimaFormReserva.js"></script>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista habitaciones a reservar Habitaciones</title>
    </head>
    <body>
    <?php
    
    include '../Controlador/controlador_reserva.php';
    ?>

    <form method="post"  class=" bg-secondary mb-3 text-white">
        <div class="formulario_cambio_parametros bg-secondary text-white form-group row">
            <div class="col">
                <label for="fechaEntrada">Fecha entrada</label>
                <input type="date" id="fechaEntrada" name="datoFechaInicio" value=<?= $fechaInicioFormateada ?> class="form-control">
            </div>
            <div class="col">
                <label for="fechaSalida">Fecha Salida</label>
                <input type="date" id="fechaSalida" name="datoFechaFin" value=<?= $fechaFinFormateada ?> class="form-control"> 
            </div>
            <!-- <div class="col"> -->
                <!-- <label for="nAdultos">Adultos</label> -->
                <input type="hidden" name="adultos" id="nAdultos" value='<?= $numPersonas?>' class="form-control" min="1" max="5">
            <!-- </div>
            <div class="col"> -->
                <!-- <label for="nNiños">Niños (menores 13 años)</label> -->
                <input type="hidden" name="niños" id="nNiños" value='<?= $numNiños?>' class="form-control"  min="0" max="5">
            <!-- </div> -->
            <div class="col">
                <input class="btn btn-primary btn-custom" type="submit" class="submi" name="btn_cambio_parametros_admin" >
            </div>
       
        
        <h4><?= $diff->days?> Noches de estancia  </h4>
        </div>
    </form>
    <style>table, td, th{border: solid black 1px;}</style>
                    <table>
                    <tr>
                       
                        <th>Tipo</th>
                        <th>Precio</th>
                        <th>Planta</th>
                        <th>Estado</th>
                        <th>nº camas</th>
                        <th>Tipo de baño</th>
                        <th>Ubicación</th>
                        <th>Descripción</th>
                        <th>Localidad</th>
                        <th>cod_estancia</th>

                    </tr>
                    <?php
                    foreach ($registro as $x) {
                        echo "<tr>
                 
                <td>". $x->tipo_estancia . "</td>
                <td>". $x->precio ."€</td>
                <td>". $x->planta . "</td>
                <td>". $x->estado ."</td>
                <td>". $x->num_camas ."</td>
                <td>". $x->tipo_bano ."</td>
                <td>". $x->ubicacion ."</td>
                <td>". $x->descripcion ."</td>
                <td>". $x->localidad ."</td>
                <td>". $x->cod_estancia ."</td>
                <td><form method='post'> <button name=reservaAdministracion value='$x->cod_estancia'>Reservar</button></form></td>
                </tr>";
                    }
                    ?>      

</table>
    </body>
    <?php
include '../Controlador/controlador_carrito.php';
// print_r($_SESSION['arrayReserva']);
?>
    </html>
</body>
</html>