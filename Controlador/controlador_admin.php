<?php
require_once "../Modelo/usuario.php";
require_once "../Modelo/Estancia.php";
require_once "../Modelo/Habitacion.php";
require_once "../Modelo/Sala.php";

//Objetos de uso común:
$estanciaGeneral = new Estancia('','','','','','','','','');
$estanciasDisponibles = $estanciaGeneral->obtenerNiSaNiHa();
$habitacionGeneral = new Habitacion('','','','','','','','','','','','');
$salaGeneral = new Sala('','','','','','','','','','','','');
if(isset($_REQUEST['btnNuevoAdmin'])){
    $nuevoUsuario = new Usuario($_POST['nombrePropio'],
                                $_POST['primerApellido'],
                                $_POST['segundoApellido'],
                                $_POST['telefono'],
                                $_POST['correoElectronico'],
                                // $_POST['nombreUsuario'],
                                $_POST['contraseñaUsuario'],
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
//  if (isset($_REQUEST['btnNuevaHabitacion'])) {

//     $nuevaHabitacion = new Habitacion($_POST['cod_estancia'],'no','no','no','no','no','no','no','no',$_POST['cod_habitacion'],$_POST['num_camas'],$_POST['tipo_bano']);
//     if($nuevaHabitacion->crearHabitacion()){
//         echo "Habitación creada";
//     }
    
//  }

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
//  if (isset($_REQUEST['btnNuevaSala'])) {
//     $nuevaSala = new Sala($_POST['cod_estancia'],'','','','','','','','',$_POST['cod_Sala'],$_POST['aforo'],$_POST['tipo_Sala']);
//     if($nuevaSala->crearSala()){
//         echo "Sala creada";
//     }
//  }

 
?>