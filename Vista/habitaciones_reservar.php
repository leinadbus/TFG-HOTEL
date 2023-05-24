<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de habitaciones para reservar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">

    <script src="fechaMinimaFormReserva.js"></script>
    
</head>

<body>

<div class="container">

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
            <div class="col">
                <label for="nAdultos">Adultos</label>
                <input type="number" name="adultos" id="nAdultos" value='<?= $numPersonas?>' class="form-control" min="1" max="5">
            </div>
            <div class="col">
                <label for="nNiños">Niños (menores 13 años)</label>
                <input type="number" name="niños" id="nNiños" value='<?= $numNiños?>' class="form-control"  min="0" max="5">
            </div>
            <div class="col">
                <input class="btn btn-primary btn-custom" type="submit" class="submi" name="btn_cambio_parametros" >
            </div>
       
        
        <h4><?= $diff->days?> Noches de estancia  </h4><h4> <?=$numHabitaciones?> habitaciones necesarias</h4>
        </div>
    </form>

    <?php
   
    echo "<form method='post' >  
    <div class='row'> ";

    foreach ($registro as $x) {
        echo "
        <div class='col'>
            <div class='card mb-3  bg-light '   style='width: 25rem; '>
            <img src='../img/fotos/cuarto_completo.jpg' class='card-img-top alt='Imagen de Tarjeta'>
                <div class='card-body'>
                <h4 style='display:inline;'>Tipo:</h4><h2 style='display:inline;'> " . ucwords($x->tipo_estancia) . "</h2>
                <h4 style='color: green;'>" . $x->precio . "€/noche</h4>
                <p class='card-text'>" .  $x->descripcion . "
                </p>

                <input type='checkbox' name='producto[]' class='btn-check' id='" . $x->cod_estancia . "' value='" . $x->cod_estancia . "' autocomplete='off' >
                <label class='btn btn-outline-primary' for='" . $x->cod_estancia . "'>Añadir</label>
                
                </div>
            </div>
        </div>";
    }
    echo "";
    ?>

        <?php 
        // Control de sesión: si no está iniciada la sesión no se muestra el botón necesario para seguir la reserva
        if(!empty($_SESSION['nom_Usuario'])){
        ?>
            <input type='submit' class='btn btn-danger mb-4' name='btn_enviar_reservas' value='Reservar' id="btnReservar">
        <?php 
        } else {
        ?>
            <input type='submit' class='btn btn-primary mb-4' name='inicio_Sesion' value='Inicia Sesión para Reservar'>
        <?php 
        }
        ?>
    </div>
    </form>
        <?php
        //Escondemos el dato en la web del numero de habitaciones para poder cogerlo con JS
        echo "<form method='post'><input type='hidden' name='numeroMaximoHabitaciones' value='" . $numHabitaciones . "'></form>";

        //Escondemos los datos necesarios para la reserva  

        ?>


    <script>
        //   Función que determina el numero de habitaciones que se pueden seleccionar
        var maxSeleccionados = document.querySelector('input[type="hidden"][name="numeroMaximoHabitaciones"]').value;
        console.log("Numero: ", maxSeleccionados);
        var checkboxes = document.getElementsByTagName('input');

        const btnReservar = document.getElementById("btnReservar");
        btnReservar.disabled = true;

        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].addEventListener('change', function() {
                btnReservar.disabled = true;
                var numSeleccionados = 0;
                for (var j = 0; j < checkboxes.length; j++) {
                    if (checkboxes[j].checked) {
                        numSeleccionados++;
                        console.log(numSeleccionados)
                    }
                }
                // CONTROL DEL BOTÓN DE CONTINUACIÓN DE FORMULARIO
                if (numSeleccionados == maxSeleccionados ){
                    btnReservar.disabled = false;
                } else if (numSeleccionados >= maxSeleccionados){
                    btnReservar.disabled = false;
                }

                if (numSeleccionados > maxSeleccionados) {
                    this.checked = false;
                    alert("Según el número de personas usted debería reservar un máximo de " + maxSeleccionados + " habitaciones");
                    
                }
                
            });
        }
    </script>

    </div>
</body>

</html>