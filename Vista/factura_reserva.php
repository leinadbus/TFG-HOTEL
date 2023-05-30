<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento final de proceso reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../Vista/style.css">
    <link rel="stylesheet" type="text/css" href="../Vista/mediaQuery.css">
    <style>
        @media print {
        body * {
            visibility: hidden;
        }
        #areaImprimir, #areaImprimir * {
            visibility: visible;
        }
        #areaImprimir {
            position: absolute;
            left: 0;
            top: 0;
        }
        }
    </style>
</head>
<body>
    <?php 
    include '../Controlador/controlador_carrito.php';
    ?>

    <div id="areaImprimir" class="areaImprimir">
        <h3>Datos de la Reserva</h3>

        <h5>Datos del usuario</h5>
        <p>Nombre: <?php echo $informacionUsuario[0]->nombre . " " . $informacionUsuario[0]->primer_apellido ." " . $informacionUsuario[0]->segundo_apellido ?></p>

        <h5>Habitaciones Reservadas</h5>
        <?php 
       foreach ($habitaciones as $habitacion=>$precio) { 
        ?>
        <p>Habitación: <?= $habitacion?> ...... Precio: <b><?= $precio?>€</b> </p>
        <?php
        }
        ?>

        <h5>Periodo de la reserva</h5>
        <p>Fecha de inicio: <b><?=$_SESSION['arrayReserva']['fechaInicio']?></b> | Fecha fin: <b><?=$_SESSION['arrayReserva']['fechaFin']?></b></p>
        
        <h5>Extras añadidos</h5>
        <?php 
        if ($_SESSION['arrayReserva']['lateCheckOut'] == 'Si'){
            ?>
            <p>Late checkOut x habitación : Sí ......
            Precio: <b><?=20*$_SESSION['arrayReserva']['numeroHabitaciones']?>€</b></p>
            <?php  
        }

        if ($_SESSION['arrayReserva']['todoIncluido'] == 'Si'){
            ?>
            <p>Todo incluido x por noche : Sí ......
            Precio: <b><?=100*$_SESSION['arrayReserva']['numeroDias']?>€</b></p>
            <?php  
        }

        if ($_SESSION['arrayReserva']['recogidaAeropuerto'] == 'Si'){
            ?>
            <p>Recogida en el aeropuerto: Sí ......  Precio: 75€</b></p>
            <?php  
        }
        ?>
       

        <h5>Datos del método de pago</h5>
        <p>Método de pago: **** **** **** *<?=$ultimos_tres_digitos?></p>

    <form id="formularioImpresion">
    <button name="imprimir">Imprimir</button>
    </form>
    </div>
    <script>
        const botonImpresion = document.getElementsByName('imprimir');
        const formulario = document.querySelector('#formularioImpresion');

        formulario.addEventListener('submit', function(event) {
        //Impedimos que el botón se ejecute como una función get al servidor y recargue la página
        event.preventDefault();
        // Imprimimos la página con la herramienta del navegador cliente
        window.print();
        });


    </script>
</body>
</html>