<?php
require_once "../Modelo/usuario.php";

$usuarioPrueba = new Usuario('','','','','','','','admin');

if(isset($_REQUEST['inicio_Sesion'])){
   header("location:Inicio_sesion.php");
}

if(isset($_REQUEST['btnNuevoUsuario'])){
    $nuevoUsuario = new Usuario($_POST['nombrePropio'],
                                $_POST['primerApellido'],
                                $_POST['segundoApellido'],
                                $_POST['telefono'],
                                $_POST['correoElectronico'],
                                // $_POST['nombreUsuario'],
                                $_POST['contraseñaUsuario'],
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

    $usuarioEjemplo = new Usuario('','','','',$_POST['user'],$_POST['contrasena'],'');
    if($usuarioEjemplo->comprobarUsuarioBD($_POST['user'],$_POST['contrasena'],$usuarioEjemplo)){

       
        session_start();
        $registro = $usuarioEjemplo->obtieneInfoUsuario($_POST['user']);
       
        $_SESSION['nom_Usuario']= $registro[0]->nombre;
        $registros = $usuarioEjemplo->comprobarTipoUsuario($_POST['user'],$_POST['contrasena']);
        $_SESSION['correo_Usuario'] = $registro[0]->correo;
        $_SESSION['tipo_Usuario']=$registros[0]['rol'];
           header("location:home.php");

        
        


    }
}

if(isset($_REQUEST['borrarAdmin'])){
    $cod = $_REQUEST['borrarAdmin'];
    $usuarioPrueba->borrar($cod);
    // echo "usuario eliminado";
    //include 'tabla_usuarios.php';
   
  }



?>