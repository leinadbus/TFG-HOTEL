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
    <style>
        #container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 30rem;
        }

        #enviarPago {
            width: 100%;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 15px;
            background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%);
            border: none;
            transition: 0.5s;
            background-size: 200% auto;
            

        }
        #enviarPago:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
        }

        #container .h8 {
            font-size: 30px;
            font-weight: 800;
            text-align: center;
        }


        #enviarPago:hover .fas.fa-arrow-right {
            transform: translate(15px);
            transition: transform 0.2s ease-in;
        }
    </style>
    <title>Pasarela de Pago</title>
</head>
<body>
    <?php 
    include '../Controlador/controlador_carrito.php';
    ?>

    <div class="container p-0" id="container">
        <form method="post">
        <div class="card px-4">
            <p class="h8 py-3">Payment Details</p>
            <div class="row gx-3">
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Nombre del titular</p>
                        <input class="form-control mb-3" type="text" placeholder="Nombre" name="nombreTarjeta">
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Numero de la tarjeta</p>
                        <input class="form-control mb-3" type="text" placeholder="1234 5678 435678" name="numeroTarjeta">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Fecha de caducidad</p>
                        <input class="form-control mb-3" type="text" placeholder="MM/YYYY" name="caducidadTarjeta">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">CVV/CVC</p>
                        <input class="form-control mb-3 pt-2 " type="password" placeholder="***" >
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" value="Pagar <?=$_SESSION['arrayReserva']['precioFinal'] ?>€" class="btn btn-primary mb-3" id="enviar_Pago" name="enviar_Pago">
                </div>
            </div>
        </div>
        </form>
    </div>

</body>
</html>