<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperial Retreat</title>
    <link rel="icon" type="image/png" href="../img/logoVentanaNavegador2.png">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">





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
  <form method="post">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button name="btn_Inicio" class="nav-link active">Inicio</button>
                        <li class="nav-item">
                            <button class="nav-link active" aria-current="page" name="btn_pagina_Galeria">Galeria</button>
                        </li>

                      <li class="nav-item">
                            <button class="nav-link active" aria-current="page" name="btn_pagina_Habitaciones">Habitaciones</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link active" aria-current="page" name="btn_pagina_Eventos">Salas de eventos</button>
                        </li>
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
                           
                        <?php
                        $action = "";
                        if (isset($_POST['enviar'])) {
                            $correoDestino = $_POST['correoDestino'];
                           
                            $action = "https://formsubmit.co/" . $correoDestino;
                            
                        }
                        ?>
                        
                            <h4>Boletín informativo</h4>
                            <p>Regístrate para recibir noticias y ofertas especiales</p>
                            <!-- <form> -->
                            <div class="form-group">
                                <form method="post" action="<?php echo $action ?>">
                                    <label for="correoDestino">Dirección de correo electrónico</label><br />
                                    <input type="email" class="form-control" placeholder="Correo electrónico" name="correoDestino" id="correoDestino" required>

                                    <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Suscribirse</button>
                                </form>
                            </div><br />
                            <?php
                $mensaje = "¡Gracias por unirte a nuestra newsletter de Imperial Retreat! Estamos encantados de tenerte como parte de nuestra comunidad y de compartir contigo nuestras últimas novedades, promociones y eventos especiales.

                A partir de ahora, recibirás en tu bandeja de entrada información exclusiva sobre nuestros jardines de eventos, servicios premium y experiencias únicas. Te mantendremos al tanto de nuestras próximas celebraciones y te brindaremos inspiración para organizar eventos inolvidables.

                Si en algún momento deseas cancelar tu suscripción, podrás hacerlo a través del enlace de 'cancelar suscripción' que encontrarás al final de nuestros correos electrónicos.

                Asegúrate de agregar nuestra dirección de correo electrónico contacto@imperialretreat.com a tus contactos para evitar que nuestros mensajes lleguen a la carpeta de correo no deseado.

                Si tienes alguna pregunta, sugerencia o simplemente deseas compartir tu experiencia con nosotros, no dudes en ponerte en contacto. Estamos aquí para ayudarte.

                ¡Gracias nuevamente por unirte a nuestra newsletter de Imperial Retreat!

                Saludos cordiales,

                Imperial Retreat

                contacto@imperialretreat.com";

            

                ?>
                <?php if ($action !== "") : ?>
                    <form action="<?php echo $action ?>" method="POST" id="autoSubmitForm">
                        <!-- contenido del formulario -->
                        <input type="email" name="email" value="imperial-retreat@gmail.com" required hidden><br />

                        <input type="text" name="Asunto" value="¡Gracias por suscribirte a nuestra newsletter!" required hidden><br />

                        <textarea style="display: none;" name="Estimado/a">
                            <?php echo $mensaje; ?>
                        </textarea>
                        <input type="hidden" name="_captcha" value="false">
                        <!-- <input type='hidden' name='_next' value='http://localhost/tfg_final/master/Vista/'>  Directorio Gerardo -->
                        <input type='hidden' name='_next' value='http://localhost/TFG-HOTEL/Vista/'>

                    </form>

                    <script>
                        window.addEventListener('DOMContentLoaded', (event) => {
                            document.getElementById('autoSubmitForm').submit();
                        });
                    </script>
                <?php endif; ?>

              </div>
        </div>
        <div class="footerLogo">
            <div class="col-md-4 "><br /><br />
                <h6>© Copyright 2023 - All Rights Reserved</h6>
                
            </div>
            <div class="col-md-3 logoEmpresa" style=" width:150px; height:150px">
                <img src="../img/logoOriginalSinFondo.png" alt="Imperial Retreat Logo" title="Imperial Retreat" style="width: 100%; height: 100%;" />
            </div>
        </div>

    </footer>
   
</body>

</html>