<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../Vista/style.css">
    <link rel="stylesheet" type="text/css" href="../Vista/mediaQuery.css">
    <title>Datos del cliente</title>
</head>
<body>

    <?php
        include '../Controlador/controlador_carrito.php';
    ?>

<h2 class="mt-4 mb-4">Datos del cliente:</h2>

    <form method="post">
        <div>
            <h5>Nombre completo:</h5>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="nombrePropio" placeholder="Nombre" >
                </div>

                <div class="col">
                    <input type="text" class="form-control" name="primerApellido" placeholder="Primer apellido" >
                </div>

                <div class="col">
                    <input type="text" class="form-control" name="segundoApellido" placeholder="Segundo apellido" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="telefono" placeholder="Telefono contacto" >
                </div>

                <div class="col">
                    <input type="text" class="form-control" name="correoElectronico" placeholder="Correo electrónico" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                <button type="submit"class="btn btn-outline-primary"  name="btn_enviar_datos_cliente">Confirmar</button>
                </div>
            </div>
        </div>
    </form>

</body>
</html>