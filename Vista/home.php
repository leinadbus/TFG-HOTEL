<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperial Retreat</title>
    <link rel="icon" type="image/png" href="../img/logoVentanaNavegador2.png">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">


    <!-- <script src="script.js"></script> -->



</head>
<?php
session_start();
if (isset($_SESSION['nom_Usuario'])) {
    $perfilUsuario = "<button name=perfil_usuario value='perfil_usuario' class='btnIni'>" . $_SESSION['nom_Usuario'] . "</button> 
            <br> <button name=cerrar_usuario value='cerrar_usuario' class='btnIni'>Cerrar sesión</button>";
} else {
    $perfilUsuario = "<button name='inicio_Sesion' value='inicio_Sesion' class='btnIni'>Iniciar Sesión</button>";
}

?>

<body>
    <?php
    // Desactivar la caché en el lado del navegador
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");

    // Resto del código de procesamiento del formulario
    ?>



    <!-- BARRA DE NAVEGACION PRINCIPAL -->
    <nav id="headerSuperior" class="navbar navbar-expand-lg navbar-light bg-secondary justify-content-between">
        <!-- div icono-->
        <div>
            <a class="" href="home.php">
                <img src="../img/logoOriginalSinTextoSinFondo.png" alt="Imperial Retreat Logo" title="Imperial Retreat" width="150px" height="150px" />
            </a>
        </div>

        <!-- div nombre-->
        <div>
            <!-- <a class="titulo">
                Imperial Retreat
            </a> -->
            <form method="post">
                <button name="btn_Inicio" class="nav-link active titulo">Imperial Retreat</button>
            </form>

        </div>

        <!-- div usuario-->
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form method="POST">
                        <?= $perfilUsuario ?>
                    </form>
                </li>
            </ul>
        </div>

        <?php
        include '../Controlador/controlador_sesion.php';
        ?>
    </nav>


    <!-- BARRA DE NAVEGACION PAGINAS WEB -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <!-- <button class="navbar-toggler" id="hamburguesa" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav"> -->
                <form method="post">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button name="btn_Inicio" class="nav-link active">Inicio</button>
                        <li class="nav-item">
                            <button class="nav-link active" aria-current="page" name="btn_pagina_Galeria">Galeria</button>
                        </li>

                        <!-- <li class="nav-item">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Reservas</option>
                                <option value="1">Habitaciones</option>
                                <option value="2">Sala de Evento</option>
                            </select>
                        </li> -->
                        <li class="nav-item">
                            <button class="nav-link active" aria-current="page" name="btn_pagina_Habitaciones">Habitaciones</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link active" aria-current="page" name="btn_pagina_Eventos">Salas de eventos</button>
                        </li>
                        <!-- <li class="nav-item">
                            <button class="nav-link active" href="#">Ofertas</button>
                        </li> -->
                        <li class="nav-item">
                            <button class="nav-link active" aria-current="page" name="btn_pagina_Contacto">Contacto</button>
                        </li>

                        <?php
                        if (isset($_SESSION['tipo_Usuario']) && $_SESSION['tipo_Usuario'] == 'admin') {
                        ?>
                            <li class="nav-item">
                                <button name="btn_Administracion" class="nav-link active">Administración</button>
                            </li>
                        <?php
                        }
                        ?>

                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php
        // include '../Controlador/controlador_sesion.php';
        include '../Controlador/controlador_home.php';
        include "../Controlador/controlador_admin.php";
        ?>
    </div>

    <br><br><br>
    <footer class="footer bg-secondary text-white">
        <div class="row footerPrincipal">
            <div class="col-md-3 contactoFooter">
                <h4>Contacto</h4>
                <div class="contenidoContacto">
                    <p>MADRID CALLE MARQUÉS DE LA ENSENADA</p>
                    <p>Teléfono: 916 535 482 </p>
                    <p>Correo electrónico: info@imperialretreat.com</p>
                    <form method="post">
                        <button class="nav-link active" aria-current="page" name="btn_pagina_FQ"><u>Preguntas frecuentes</u></button>
                    </form>
                </div>

            </div>

            <div class="col-md-4 ">
                <h4 class="iconos">Redes sociales</h4>
                <ul class="list-unstyled iconos">
                    <li><a href="#"><i class="fab fa-facebook fa-lg text-white"></i> Facebook</a>

                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter fa-lg text-white"></i> Twitter</a>

                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram fa-lg text-white"></i> Instagram</a>

                    </li>
                </ul>
            </div>

            <div class="col-md-4 boletinFooter">
                <h4>Boletín informativo</h4>
                <p>Regístrate para recibir noticias y ofertas especiales</p>
                <!-- <form> -->
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Correo electrónico" name="emailCliente">
                    </div><br />
                    <?php
                        if (isset($_POST['emailCliente'])) {
                            $correo = $_POST['emailCliente'];
                        }
                    ?>
                    <form action="https://formsubmit.co/<?php echo $correo; ?>" method="POST">



                        <input type="email" name="email" value="imperial-retreat@gmail.com" required hidden><br />

                        <input type="text" name="Asunto" value=" ¡Gracias por suscribirte a nuestra newsletter!" required hidden><br />

                        <textarea style="display: none;" name="Estimado/a ,">

    ¡Gracias por unirte a nuestra newsletter de Imperial Retreat! Estamos encantados de tenerte como parte de nuestra comunidad y de compartir contigo nuestras últimas novedades, promociones y eventos especiales.

    A partir de ahora, recibirás en tu bandeja de entrada información exclusiva sobre nuestros jardines de eventos, servicios premium y experiencias únicas. Te mantendremos al tanto de nuestras próximas celebraciones y te brindaremos inspiración para organizar eventos inolvidables.

    Si en algún momento deseas cancelar tu suscripción, podrás hacerlo a través del enlace de "cancelar suscripción" que encontrarás al final de nuestros correos electrónicos.

    Asegúrate de agregar nuestra dirección de correo electrónico ([dirección de correo electrónico de la newsletter]) a tus contactos para evitar que nuestros mensajes lleguen a la carpeta de correo no deseado.

    Si tienes alguna pregunta, sugerencia o simplemente deseas compartir tu experiencia con nosotros, no dudes en ponerte en contacto. Estamos aquí para ayudarte.

    ¡Gracias nuevamente por unirte a nuestra newsletter de Imperial Retreat!

    Saludos cordiales,


    Imperial Retreat

    contacto@imperialretreat.com
</textarea>

                        <button type="submit" class="btn btn-primary">Suscribirse</button>

                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="http://localhost/solucion_tfg/Vista/home.php">

                    </form>
                    <!-- <button type="submit" class="btn btn-primary">Suscribirse</button> -->
                <!-- </form> -->
            </div>
        </div>
        <div class="footerLogo">
            <div class="col-md-4 "><br /><br />
                <h6>© Copyright 2023 - All Rights Reserved</h6>
                <!-- <p>All Rights Reserved.</p> -->
            </div>
            <div class="col-md-3 logoEmpresa" style=" width:150px; height:150px">
                <img src="../img/logoOriginalSinFondo.png" alt="Imperial Retreat Logo" title="Imperial Retreat" style="width: 100%; height: 100%;" />
            </div>
        </div>

    </footer>
    <!-- </div>                -->

    <!-- <br /><br /><br /><br />  -->

</body>

</html>