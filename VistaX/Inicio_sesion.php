<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de inicio de sesión</h1>

    <form method="post">
        <legend>Inicio de sesión</legend>
        <label for="user">Nombre de usuario:</label>
        <input type="text" name="user" require>

        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="contrasena" require>
 
        <input type="submit" name="btnEnviarUsuario">
    </form>

    
        <a href="Form_nuevoUsuario.php">Nuevo usuario</a>
   <?php
   include '../Controlador/controlador_sesion.php';
   
   ?>
</body>
</html>