<?php
require_once "../Modelo/usuario.php";
require_once "../Modelo/Estancia.php";
require_once "../Modelo/Habitacion.php";
require_once "../Modelo/Sala.php";

//Variables de entorno:
$estanciaGeneral = new Estancia('','','','','','','','','');
$estanciasDisponibles = $estanciaGeneral->obtenerNiSaNiHa();
$habitacionGeneral = new Habitacion('','','','','','','','','','','','');
$salaGeneral = new Sala('','','','','','','','','','','','');

// Controlador que gestiona el alta de un nuevo usuario ADMINISTRADOR
if(isset($_REQUEST['btnNuevoAdmin'])){
    $nuevoUsuario = new Usuario(filter_var($_POST['nombrePropio'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                                filter_var($_POST['primerApellido'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                                filter_var($_POST['segundoApellido'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                                filter_var($_POST['telefono'], FILTER_SANITIZE_NUMBER_INT),
                                filter_var($_POST['correoElectronico'], FILTER_SANITIZE_EMAIL),
                                filter_var($_POST['contraseñaUsuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                                'admin');
                                
                                if(!$nuevoUsuario->comprobarCorreoExistente($_POST['correoElectronico'])){
                                    if($nuevoUsuario->crearUsuario()){
                                            
                                        header("location:Inicio_sesion.php");
                                    }else {
                                        echo "Algo salió mal";
                                    }
                                } else {
                                    include "Correo ya existente";
                                    $msg = "Correo ya existente";
                                }  
 } 

// Controlador que gestiona la creación de una nueva estancia
 if (isset($_REQUEST['btnNuevaEstancia'])) {
    $nuevaEstancia = new Estancia($_POST['cod_estancia'],
                                    $_POST['estado'],
                                    $_POST['descripcion'],
                                    $_POST['ubicacion'],
                                    $_POST['planta'],
                                    $_POST['tipo'],
                                    $_POST['precio'],0,
                                    $_POST['localidad'],
                                    $_POST['estado']);
    if($nuevaEstancia->crearEstancia()){
        echo "Estancia creada";

    }
 }

 // Controlador que gestiona la creación de una nueva habitación
 if (isset($_REQUEST['btnNuevaHabitacion'])) {

            $nuevaEstancia = new Estancia($_POST['cod_estancia'],
            $_POST['estado'],
            $_POST['descripcion'],
            $_POST['ubicacion'],
            $_POST['planta'],
            $_POST['tipo'],
            $_POST['precio'],0,
            $_POST['localidad'],
            $_POST['estado']);

            if($nuevaEstancia->crearEstancia()){
                 echo "Estancia creada";

            }
    $nuevaHabitacion = new Habitacion($_POST['cod_estancia'],'no','no','no','no','no','no','no','no',$_POST['cod_habitacion'],$_POST['num_camas'],$_POST['tipo_bano']);

            if($nuevaHabitacion->crearHabitacion()){
                echo "Habitación creada";
            }
    
 }

// Controlador que gestiona la creación de una nueva Sala
if (isset($_REQUEST['btnNuevaSala'])) {
    
        $nuevaEstancia = new Estancia($_POST['cod_estancia'],
        $_POST['estado'],
        $_POST['descripcion'],
        $_POST['ubicacion'],
        $_POST['planta'],
        $_POST['tipo'],
        $_POST['precio'],0,
        $_POST['localidad'],
        $_POST['estado']);

        if($nuevaEstancia->crearEstancia()){
        echo "Estancia creada";

        }

    $nuevaSala = new Sala($_POST['cod_estancia'],'','','','','','','','',$_POST['cod_Sala'],$_POST['aforo'],$_POST['tipo_Sala']);
    if($nuevaSala->crearSala()){
        echo "Sala creada";
    }
 }

 // Controlador que gestiona el control de estados de las habitaciones
 if(isset($_REQUEST['cambiarEstadoHabitacion'])) {
    $estadoHabitacion = $_POST['cambiarEstadoHabitacion'];
    // echo $estadoHabitacion; 
    $habitacionGeneral->cambiarEstadoHabitación($estadoHabitacion);
 }

// Controlador que gestiona el control de estados de las salas
 if(isset($_REQUEST['cambiarEstadoSala'])) {
    $estadoHabitacion = $_POST['cambiarEstadoSala'];
    // echo $estadoHabitacion; 
    $salaGeneral->cambiarEstadoHabitación($estadoHabitacion);
 }
 
?>