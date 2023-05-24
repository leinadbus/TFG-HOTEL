<?php
require_once '../Modelo/Reserva.php';

if(isset($_REQUEST['btn_Administracion'])){
   
    include '../Vista/Home_Administracion.php';

  } else if (isset($_REQUEST['btn_Inicio'])){

    include '../Vista/Home_principal.php';

  } else if (isset($_REQUEST['btn_aniadir_Admin'])){

    include '../Vista/From_nuevoAdmin.php';

  } else if (isset($_REQUEST['btn_eliminar_Admin'])) {

    include '../Vista/tabla_usuarios.php';

  } else if (isset($_REQUEST['btn_anadir_estancia'])) {

    include '../Vista/decision_estancia.php';

  } else if (isset($_REQUEST['btn_pagina_Galeria'])) {
    
    include '../Vista/Galeria.php';
  
  } else if (isset($_REQUEST['btn_pagina_Contacto'])) {
      
    include '../Vista/Contacto.php';

  } else if (isset($_REQUEST['btn_pagina_Habitaciones'])) {
      
    include '../Vista/Habitacion.php';
  
  } else if (isset($_REQUEST['btn_pagina_Eventos'])) {
      
    include '../Vista/Eventos.php';
  
  } else if (isset($_REQUEST['btn_anadir_habitacion'])) {
    
    include '../Vista/Form_nuevaHabitacion.php';
  
  } else if (isset($_REQUEST['btn_anadir_sala'])) {
    
    include '../Vista/Form_nuevaSala.php';
  
  } else if (isset($_REQUEST['btn_ver_habitaciones'])) {
    
    include '../Vista/Todas_habitaciones.php';
  
  } else if (isset($_REQUEST['btn_ver_salas'])) {
    
    include '../Vista/Todas_salas.php';

  } else if (isset($_REQUEST['btn_pagina_FQ'])) {
    
    include '../Vista/Preguntas_frecuentes.php';

  } else if (isset($_REQUEST['bton_formulario_principal'])) {
    
    include '../Vista/habitaciones_reservar.php';
    
  } else if (isset($_REQUEST['btn_cambio_parametros'])) {
    
    include '../Vista/habitaciones_reservar.php';
    
  } else if (isset($_REQUEST['btn_enviar_reservas'])) {
    
    include '../Vista/form_carrito.php';
    
  } else if (isset($_REQUEST['btn_enviar_extras'])) {
    
    include '../Vista/pasarela_de_pago.php';
    
  } else if (isset($_REQUEST['enviar_Pago'])) {
    
    include '../Vista/factura_reserva.php';
    
  } else if (isset($_REQUEST['btn_aniadir_habitacion'])) {        
    
    include '../Vista/Form_nuevaHabitacion.php';
    
  } else if (isset($_REQUEST['btn_aniadir_sala'])) {                 
    
    include '../Vista/Form_nuevaSala.php';
    
  } else if (isset($_REQUEST['btn_reserva_admin'])) {                 
    
    include 'botones_reserva_habitacion_sala.php';
    
  } else if (isset($_REQUEST['bton_formulario_fechas_admin'])) {                 
    
    include 'todas_habitaciones_reservas_admin.php';
    
  } else if (isset($_REQUEST['reserva_habitacion_admin'])) {                 
    
    include 'formulario_fechas_admin.php';
    
  } else if (isset($_REQUEST['reserva_sala_admin'])) {                 
    
    include '';
    
  } else if (isset($_REQUEST['btn_cambio_parametros_admin'])) {
    
    include '../Vista/todas_habitaciones_reservas_admin.php';
    
  } else if (isset($_REQUEST['reservaAdministracion'])) {
    
    include '../Vista/form_carrito_administracion.php';
    
  } else if (isset($_REQUEST['btn_enviar_extras_admin'])) {
    
    include '../Vista/datos_cliente_admin.php';
    
  } else if (isset($_REQUEST['btn_enviar_datos_cliente'])) {
    
    include '../Vista/resumen_pago_admin.php';
    
  } else if (isset($_REQUEST['terminar_reserva_admin'])) {
    
    include '../Vista/factura_reserva_admin.php';
    
  } else{
    
    include '../Vista/Home_principal.php';
    
  }

//  btn_aniadir_sala

//  btn_anadir_estancia

//  btn_reserva_admin

//  reserva_habitacion_admin

//  bton_formulario_fechas_admin

//  btn_cambio_parametros_admin

//  btn_enviar_extras

//  btn_enviar_datos_cliente

// terminar_reserva_admin
?>

