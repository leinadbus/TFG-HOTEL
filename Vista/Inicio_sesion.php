<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../Vista/style.css">
    <link rel="stylesheet" type="text/css" href="../Vista/mediaQuery.css">
    <link rel="stylesheet" type="text/css" href="fondoLoginRegistro.css">


</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;

    }

    .contenedorLogin {
        position: absolute;
        left: 50%;
        transform: translate(-50%, 90%);
    }   

    form, a, legend {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<body>
    <div class="contenedorLogin">
        <h1>Pagina de inicio de sesión</h1>

        <form method="post">
            <legend>Inicio de sesión</legend>
            <label for="user">Correo electrónico:</label><br/>
            <input type="text" name="user" require><br/>

            <br>
            <label for="password">Contraseña:</label><br/>
            <input type="password" name="contrasena" require><br/>

            <input type="submit" name="btnEnviarUsuario">
        </form>


        <a href="Form_nuevoUsuario.php">Nuevo usuario</a>
    </div>

    <?php
    include '../Controlador/controlador_sesion.php';

    ?>
</body>

</html>