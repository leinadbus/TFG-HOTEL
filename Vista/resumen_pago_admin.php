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

    <title>Pasarela de Pago Admin</title>
</head>
<body>

    <?php 
    include '../Controlador/controlador_carrito.php';
    ?>

    <div class="container p-0" id="container">
        
        <form method="post">
        <h2>Resumen de la reserva:</h2>
        <div>
            <p>El precio total de la reserva asciende a: <b><?=$_SESSION['arrayReserva']['precioFinal'] ?>€</b></p>
            <p>El cliente puede pagar en efectivo o con tarjeta usando el TPV, recuerda dar bien las vueltas.</p>
        </div>
         
         <input type="submit" value="Terminar reserva" class="btn btn-primary mb-3" id="terminar_reserva_admin" name="terminar_reserva_admin">
        </form>
        
    </div>

</body>
</html>