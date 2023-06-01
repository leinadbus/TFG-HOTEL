<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperial Retreat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">

    <!-- <script src="script.js"></script> -->
    <script src="fechaMinimaFormReserva.js"></script>




</head>
<style>
    .botonMagico {
        position: absolute;
        z-index: 1;
        top: 50px;
        left: 40px;
        width: 220px;
        height: 300px;
        background-color: transparent;
    }
</style>


<body>

    <div class="container">
        <!-- CARROUSEL  -->
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/fotos/habitacion_naranja.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/fotos/comida.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/fotos/hawai.jpeg" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/fotos/restaurantete.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <br /><br /><br /><br />

        <!-- Formulario Reserva -->
        <h3>Haz tu reserva:</h3>
        <form method="post" class=" bg-secondary mb-3 text-white p-3">
            <div class="container formularioReserva  bg-secondary text-white form-group row">
                <!-- <form method="post"> -->
                <div class="form_reserva col">
                    <label for="fechaEntrada">Fecha entrada:</label>
                    <input type="date" class="form-control" id="fechaEntrada" name="datoFechaInicio" required>
                </div>

                <div class="form_reserva col">
                    <label for="fechaSalida">Fecha Salida:</label>
                    <input type="date" class="form-control" id="fechaSalida" name="datoFechaFin" required>
                </div>

                <div class="form_reserva col">
                    <label for="tipoEstancia">Tipo de habitación:</label>
                    <!-- <input type="date"  class="form-control" id="fechaSalida" name="datoFechaFin" required> -->
                    <select name="tipoEstancia" class="form-control">
                        <option value="todas" selected>Todas</option>
                        <option value="comun">Estándar</option>
                        <option value="lujo">Lujo</option>
                        <option value="presidencial">Presidencial</option>
                    </select>
                </div>

                <div class="form_reserva col">
                    <label for="nAdultos">Nº Habitaciones:</label><br />
                    <input type="number" class="form-control" name="cantidadHabitaciones" id="cantidadHabitaciones" min="1" max="5" value="1" required>
                </div>

               <div class="form_reserva col">
                    <input class="btn btn-primary btn-custom" type="submit" class="submi" name="bton_formulario_principal" value="Buscar">
                </div>
                <!-- </form> -->
            </div>
        </form>


        <!-- PIE -->


        <div class="containerPie">
            <!-- Restaurante -->
                <div id="carouselRestaurante">
                    <div class="cabeceraCarousel">Restaurante</div>
                    <div id="carouselRestauranteSlide" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner imgCarouselRestaurante">
                            <form method="post">
                                <button class="btn" name="btn_pagina_Galeria" style="background-color: transparent; opacity: 1;">
                                    <div class="botonMagico"> </div>
                                </button>
                            </form>
                            <div class="carousel-item active">
                                <img src="../img/restaurante/foto1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/restaurante/foto2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/restaurante/foto3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/restaurante/foto4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/restaurante/foto5.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/restaurante/foto6.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/restaurante/foto7.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselRestauranteSlide" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselRestauranteSlide" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="descripcionRestaurante">
                        <div>
                            El restaurante del Imperial Retreat es una experiencia culinaria sin igual, con una amplia variedad de platos exquisitos preparados por chefs de renombre internacional. El ambiente es sofisticado y elegante, perfecto para cenas románticas o eventos especiales. Los ingredientes son cuidadosamente seleccionados de los mercados locales y de productores de alta calidad para ofrecer una cocina de temporada fresca y deliciosa. Además, el restaurante ofrece una extensa lista de vinos finos y bebidas artesanales para complementar tu comida.
                           </div>
                    </div>
                </div>
            <!-- Eventos -->
            <div id="carouselEventos">
                <div class="cabeceraCarousel">Eventos</div>
                <div id="carouselEventosSlide" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner imgCarouselEventos">
                        <form method="post">
                            <button class="btn" name="btn_pagina_Eventos" style="background-color: transparent; opacity: 1;">
                                <div class="botonMagico"> </div>
                            </button>
                        </form>
                        <div class="carousel-item active">
                            <img src="../img/evento/sala_jardin/jardin1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/evento/sala_jardin/jardin2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/evento/sala_jardin2/jardin4.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/evento/sala_jardin2/jardin8.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/evento/sala1/foto2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/evento/sala2/foto3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselEventosSlide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselEventosSlide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="descripcionEventos">
                    <div>
                        Las salas de eventos del Imperial Retreat ofrecen un ambiente elegante y sofisticado para la celebración de cualquier tipo de evento, desde reuniones de negocios hasta bodas y banquetes. Con un servicio personalizado y una amplia variedad de opciones de catering, nuestras salas de eventos garantizan una experiencia inolvidable para todos los asistentes. Además, nuestras instalaciones están equipadas con la última tecnología de audio y visual para satisfacer todas las necesidades de su evento. Confíe en nosotros para hacer de su evento un éxito memorable.
                       </div>
                </div>
            </div>

            <!-- Spa -->
            <div id="carouselSpa">
                <div class="cabeceraCarousel">Espacio Relax</div>
                <div id="carouselSpaSlide" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner imgCarouselSpa">
                        <form method="post">
                            <button class="btn" name="btn_pagina_Galeria" style="background-color: transparent; opacity: 1;">
                                <div class="botonMagico"> </div>
                            </button>
                        </form>
                        <div class="carousel-item active">
                            <img src="../img/spa/foto1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/spa/foto2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/spa/foto3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/spa/foto4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/spa/foto5.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSpaSlide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselSpaSlide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="descripcionSpa">
                    <div>
                        El spa del Imperial Retreat es un refugio de tranquilidad y bienestar. Disfruta de un ambiente relajante y acogedor mientras te deleitas con una amplia variedad de servicios y tratamientos personalizados para rejuvenecer tu cuerpo y mente. Desde masajes y tratamientos faciales hasta saunas y baños turcos, nuestro spa es el lugar perfecto para desconectar y revitalizarte durante tu estancia en nuestro hotel.
                       
                    </div>
                </div>
            </div>

        </div>

        <br /><br />




        <br /><br /><br /><br />
    </div>

<script>
    var inputFecha = document.getElementById('fechaEntrada');
 var inputFecha2 = document.getElementById('fechaSalida');
inputFecha.addEventListener('change', function() {
   
   var selectedDate = new Date(inputFecha.value);
   selectedDate.setDate(selectedDate.getDate() + 1);
 
   var yyyy = selectedDate.getFullYear();
   var mm = String(selectedDate.getMonth() + 1).padStart(2, '0');
   var dd = String(selectedDate.getDate()).padStart(2, '0');
   var fechaSiguiente = yyyy + '-' + mm + '-' + dd;
 console.log(fechaSiguiente);
   inputFecha2.min = fechaSiguiente;
 });
</script>
</body>

</html>