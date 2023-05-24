<?php

require_once '../Modelo/Reserva.php';

  // Calculamos el número de noches que va a pasar en el Hotel
  $fechaInicio =  new DateTime($_POST['datoFechaInicio']);
  $fechaFin = new DateTime($_POST['datoFechaFin']);

  //diff será el valor del número de días que estará el cliente en el establecimiento 
  $diff = $fechaInicio->diff($fechaFin);


  //Calculo de numero de habitaciones necesarias
  $numPersonas = (int)$_POST['adultos'];
  $numNiños = (int)$_POST['niños'];
  $numHabitaciones = ceil(($numPersonas + $numNiños) / 2);

  // Volvemos a recoger las fechas para poder mostrarlas en el formulario por si el usuario quiere cambiarlas
  $fechaInicioFormateada = date('Y-m-d', strtotime($_POST['datoFechaInicio'])) ;
  $fechaFinFormateada = date('Y-m-d', strtotime($_POST['datoFechaFin']));

  //Recogemos el registro de habitaciones disponibles en las fechas seleccionadas
  $ReservaPrueba = new Reserva();
  $registro = $ReservaPrueba->disponibilidad();

  $arrayDeDatos= array(
    "fechaInicio" => $fechaInicioFormateada,
    "fechaFin" => $fechaFinFormateada,
    "numeroDias" => $diff->days,
    "numeroHabitaciones" => $numHabitaciones,
    "numeroPersonas" => $numPersonas,
    "numeroNiños" => $numNiños,
  );

  $_SESSION['arrayReserva']=$arrayDeDatos;