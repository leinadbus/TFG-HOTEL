<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" type="text/css" href="../Vista/style.css">
    <link rel="stylesheet" type="text/css" href="../Vista/mediaQuery.css">
</head>
<body>
    <?php
            // include '../Controlador/controlador_admin.php';
    ?>
    <h1>Home Administración</h1>
    
    <form method="post">
        <div class="btn-group btn-group-lg" role="group" aria-label="Button group with nested dropdown">
            <button name="btn_aniadir_Admin" class="btn btn-secondary">Añadir Administrador</button>
            <button name="btn_eliminar_Admin" class="btn btn-secondary" >Administradores</button>

            <div class="btn-group" role="group">
                <button name="btn_anadir_estancia" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  id="btnGroupDrop1">
                    Añadir Estancia
                </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <button name="reserva_habitacion_admin" class="btn-group">Reservar habitación</button>
                        <button name="reserva_sala_admin" class="btn-group" >Reservar sala</button>
                    </div>
            </div>
            
            <button name="btn_ver_habitaciones" class="btn btn-secondary">Ver habitaciones</button>
            <button name="btn_ver_salas" class="btn btn-secondary">Ver salas</button>
            <button name="btn_reserva_admin" class="btn btn-secondary">Hacer reserva</button>
            <button name="btn_reserva_admin" class="btn btn-secondary">Buscar cliente</button>
        </div>
    </form>

</body>
</html>