<?php
require_once "../Modelo/usuario.php";

$usuarioPrueba = new Usuario('','','','','','','','admin');

if(isset($_REQUEST['inicio_Sesion'])){
   header("location:Inicio_sesion.php");
}

if(isset($_REQUEST['btnNuevoUsuario'])){
    $nuevoUsuario = new Usuario(filter_var($_POST['nombrePropio'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                                filter_var($_POST['primerApellido'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                                filter_var($_POST['segundoApellido'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                                filter_var($_POST['telefono'], FILTER_SANITIZE_NUMBER_INT),
                                filter_var($_POST['correoElectronico'], FILTER_SANITIZE_EMAIL),
                                filter_var($_POST['contraseñaUsuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                                'cliente');
            if(!$nuevoUsuario->comprobarCorreoExistente($_POST['correoElectronico'])){
                if($nuevoUsuario->crearUsuario()){
                        
                    header("location:Inicio_sesion.php");
                }else {
                    echo "Algo salió mal";
                }
            } else {
                $msg = "Correo ya existente";
            }               

}

if(isset($_REQUEST['cerrar_usuario'])){
   
  session_destroy();

    header("Refresh:0");
}

if(isset($_REQUEST['btnEnviarUsuario'])){

    $usuarioEjemplo = new Usuario('','','','',
                                    filter_var($_POST['user'], FILTER_SANITIZE_EMAIL),
                                    filter_var($_POST['contrasena'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),'');
    if($usuarioEjemplo->comprobarUsuarioBD($_POST['user'],$_POST['contrasena'],$usuarioEjemplo)){

       
        session_start();
        $registro = $usuarioEjemplo->obtieneInfoUsuario(filter_var($_POST['user'], FILTER_SANITIZE_EMAIL));
       
        $_SESSION['nom_Usuario']= $registro[0]->nombre;
        $registros = $usuarioEjemplo->comprobarTipoUsuario(filter_var($_POST['user'], FILTER_SANITIZE_EMAIL),filter_var($_POST['contrasena'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $_SESSION['correo_Usuario'] = $registro[0]->correo;
        $_SESSION['tipo_Usuario']=$registros[0]['rol'];
           header("location:home.php");

        
        


    } else {
        $msg = "Contraseña no válida";
    }
}

if(isset($_REQUEST['borrarAdmin'])){
    $cod = $_REQUEST['borrarAdmin'];
    $usuarioPrueba->borrar($cod);
    // echo "usuario eliminado";
    //include 'tabla_usuarios.php';
   
  }



?>