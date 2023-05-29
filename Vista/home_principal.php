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
                    <input type="date"  class="form-control" id="fechaSalida" name="datoFechaFin" required>
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

                <!-- <div class="form_reserva col">
                    <label for="nAdultos">Adultos</label><br />
                    <input type="number" class="form-control" name="adultos" id="nAdultos" min="1" max="5" value="1" required>
                </div>

                <div class="form_reserva col">
                    <label for="nNiños">Niños (menores 13 años)</label>
                    <input type="number" class="form-control" name="niños" id="nNiños"  min="0" max="5" value="0" required>
                </div> -->

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
                        <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem incidunt a quibusdam voluptatum quasi, sed id porro rerum maiores, neque sapiente quisquam ea suscipit deserunt amet quod autem nostrum obcaecati? -->
                        <!-- Bienvenidos al restaurante de Imperial Retreat. Aquí podrá disfrutar de una experiencia gastronómica excepcional en un ambiente elegante y acogedor. Nuestro menú, cuidadosamente seleccionado por nuestro chef, ofrece una amplia variedad de platos de alta cocina con ingredientes frescos y de alta calidad, que se complementan perfectamente con nuestra selección de vinos finos de todo el mundo. Nuestro personal altamente capacitado lo atenderá con amabilidad y profesionalismo, mientras disfruta de una vista impresionante de la ciudad o del mar. En nuestro restaurante, su experiencia culinaria será inolvidable y lo dejaremos con ganas de volver. -->
                    </div>
                </div>
            </div>

            <!-- Eventos -->
            <div id="carouselEventos">
                <div class="cabeceraCarousel">Eventos</div>
                <div id="carouselEventosSlide" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner imgCarouselEventos">
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
                        <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam quasi voluptas neque recusandae officia veniam porro ea. Quia veritatis, tempora laboriosam praesentium ipsam adipisci architecto voluptatibus minus illo perspiciatis. -->
                        <!-- La Sala de Eventos del Imperial Retreat es el lugar perfecto para llevar a cabo eventos y reuniones de gran importancia. Con su imponente arquitectura, esta sala es un espacio elegante y sofisticado, diseñado para impresionar a los invitados más exigentes. Con una capacidad de hasta 500 personas, la Sala de Eventos cuenta con tecnología de última generación y un equipo de expertos en organización de eventos para asegurar que cada detalle sea perfecto. Además, sus amplios ventanales ofrecen vistas impresionantes al entorno natural que rodea al hotel, creando una atmósfera única y acogedora para cualquier tipo de evento. Ya sea una boda, una conferencia o una cena de gala, la Sala de Eventos del Imperial Retreat es la elección ideal para hacer de cualquier evento una ocasión memorable e inolvidable. -->
                    </div>
                </div>
            </div>

            <!-- Spa -->
            <div id="carouselSpa">
                <div class="cabeceraCarousel">Espacio Relax</div>
                <div id="carouselSpaSlide" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner imgCarouselSpa">
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
                        <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dicta error facere sint, natus quidem quod ipsum eligendi nam officia id eveniet cumque, mollitia esse, aliquid quaerat! Necessitatibus, nulla officiis! -->
                        <!-- Bienvenido al Spa Imperial Retreat, donde la relajación y la renovación se unen en un ambiente lujoso y tranquilo. Nuestro spa ofrece una amplia variedad de tratamientos y servicios para satisfacer todas sus necesidades de bienestar. Desde masajes relajantes y faciales rejuvenecedores, hasta tratamientos corporales terapéuticos y servicios de peluquería y manicura, nuestro equipo altamente capacitado está aquí para brindarle una experiencia de spa inolvidable. Además, nuestro spa cuenta con instalaciones de última generación, como piscina climatizada, sauna, baño turco y sala de fitness, para asegurarnos de que su visita sea completa. Permítanos guiarlo en un viaje de relajación y revitalización en nuestro spa de clase mundial. -->
                    </div>
                </div>
            </div>

        </div>

        <br /><br />




        <br /><br /><br /><br />
    </div>


</body>

</html>