<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicio Hotel</title>
</head>
<?php
session_start();
if (isset($_SESSION['nom_Usuario'])) {
    $perfilUsuario = "<button name=perfil_usuario value='perfil_usuario'>" . $_SESSION['nom_Usuario'] . "</button> 
        <br> <button name=cerrar_usuario value='cerrar_usuario'>Cerrar sesión</button>";
} else {
    $perfilUsuario = "<button name='inicio_Sesion' value='inicio_Sesion'>Login</button>";
}

?>

<body>
    <div>
        <h1>Imperial Retreat</h1>
    </div>

    <div>
        <form method="post">
            <h3><?= $perfilUsuario ?></h3>


        </form>
    </div>

    <?php
    include '../Controlador/controlador_sesion.php';
    ?>
</body>

</html>