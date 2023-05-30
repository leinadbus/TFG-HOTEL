<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nuevo Usuario</h1>
    <form method="post">
        <label for="user">Nombre:</label>
        <input type="text" name="nombrePropio" id="">
<br>
        <label for="user">Primer apellido:</label>
        <input type="text" name="primerApellido" id="">
        <br>
        <label for="user">Segundo apellido:</label>
        <input type="text" name="segundoApellido" id="">
        <br>
        <label for="user">Teléfono de contacto:</label>
        <input type="text" name="telefono" id="">
        <br>
        <label for="user">Correo electrónico</label>
        <input type="mail" name="correoElectronico" id="">
        <br>
        <label for="user">Nombre de usuario:</label>
        <input type="text" name="nombreUsuario" id="">
        <br>
        <label for="user">Contraseña:</label>
        <input type="password" name="contraseñaUsuario" id="">
        <br>
        <input type="submit" name="btnNuevoUsuario" id="">
    </form>

<?php
include "../Controlador/controlador_sesion.php";
?>
</body>
</html>