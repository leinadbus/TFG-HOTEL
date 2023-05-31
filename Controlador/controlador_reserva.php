<?php

require_once '../Modelo/Reserva.php';

// Este controlador es el encargado de poder hacer un buscador de habitaciones a reservar dinámico

  // Calculamos el número de noches que va a pasar en el Hotel
  $fechaInicio =  new DateTime($_POST['datoFechaInicio']);
  $fechaFin = new DateTime($_POST['datoFechaFin']);

  //diff será el valor del número de días que estará el cliente en el establecimiento 
  $diff = $fechaInicio->diff($fechaFin);

  $numHabitaciones = $_POST['cantidadHabitaciones'];
  $tipo = $_POST['tipoEstancia'];
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
   
  );

  $_SESSION['arrayReserva']=$arrayDeDatos;