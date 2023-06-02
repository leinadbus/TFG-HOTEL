<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">
    <link rel="stylesheet" type="text/css" href="eventos.css">

</head>
<style>
    #btnScrollToTop {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 99;
        font-size: 30px;
        width: 60px;
        border: none;
        outline: none;
        background-color: #555;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 50%;
    }

    #btnScrollToTop:hover {
        background-color: #777;
    }

    #btn {
        display: flex;
        justify-content: center;
    }

    .nombreSala {
        font-size: 30px;
    }
</style>

<body>

    <div>
        Las salas de eventos son espacios diseñados para acoger y celebrar una gran variedad de actividades, desde reuniones de
        negocios, conferencias hasta bodas, cumpleaños y otras celebraciones sociales. Estas grandes salas y
        multifuncionales, con una capacidad variable según el tipo de evento que se vaya a celebrar. Además, estan
        equipadas con sistemas de sonido y proyección, iluminación ambiental y mobiliario adecuado para cada ocasión.
        Todas nuestras salas de eventos incluso tienen cocinas y áreas de servicio para la preparación y servido de alimentos y bebidas.
    </div>


    <!-- Boton para contactor -->
    <form method="post">
        <div id="btn">
            <button class="btn" name="btn_pagina_Contacto">Información para la reserva de salas</button>
        </div>
    </form>



    <br /><br />
    <h1>Salas Verdes</h1>
    <h6>Salas de eventos con jardines: Espacios encantadores y versátiles para banquetes, bodas y más. Combina la belleza de la naturaleza con comodidades modernas y servicios de alta calidad. Crea recuerdos inolvidables en un entorno elegante y sofisticado. Descubre la magia de nuestras salas y haz realidad tus sueños para ocasiones especiales.</h6>
    <div class="shadow p-3 mb-5 bg-white rounded">


        <p>
            El Hotel de Lujo Imperial Retreat es reconocido por sus jardines imperiales, los cuales son el escenario perfecto para realizar diversos tipos de eventos. Desde bodas románticas y elegantes hasta conferencias profesionales, nuestros jardines ofrecen un ambiente encantador y versátil para todo tipo de celebraciones.
            Nuestros jardines exquisitamente cuidados brindan un entorno natural y sereno, creando el ambiente ideal para eventos memorables. Ya sea que estés planificando un aniversario especial, un cumpleaños lleno de diversión o una importante reunión de negocios, nuestros espacios al aire libre te ofrecen la flexibilidad y la belleza necesarias para que tu evento sea un éxito.
            Con una capacidad adaptable y configuraciones personalizadas, nuestros jardines pueden adaptarse a tus necesidades específicas. Desde áreas para ceremonias hasta espacios para recepciones, contamos con diferentes zonas diseñadas para acomodar grupos de cualquier tamaño. Además, nuestros expertos en eventos estarán encantados de asesorarte y ayudarte en la planificación y organización de cada detalle, garantizando que tu evento sea inolvidable.
            Además de la belleza natural de nuestros jardines, ofrecemos servicios y comodidades de primer nivel. Desde equipos audiovisuales hasta opciones de catering de alta calidad, nos aseguramos de que cada aspecto de tu evento esté cuidado con precisión y profesionalismo.
            No importa el tipo de evento que estés planeando, en Imperial Retreat encontrarás un entorno idílico para hacer realidad tus sueños y crear recuerdos duraderos. Permítenos ser el anfitrión perfecto para tus celebraciones y confía en nuestro equipo dedicado para brindarte una experiencia excepcional.
        </p>
    </div>



    <div class="accordion" id="accordionExample">
        <span class="nombreSala">Jardin Somontes</span>
        <div class="nombreSala">

            <div>
                <i class="fas fa-users"> 200</i>

                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16" style="margin-left: 20px">
                    <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
                </svg>
                120m&sup2

                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16" style="margin-left: 20px">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                </svg>
                2.500€
            </div>
        </div>
        <div class="contenedor containerFotosJardinesEventos">
            <div class="corouselImagenes">
                <div id="carousel" class="carousel slide carouselImagenes " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/evento/sala_jardin/jardin1.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin/jardin2.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin/jardin3.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin/jardin4.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin/jardin5.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin/jardin6.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin/jardin7.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin/jardin8.jpg" alt="...">
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
            </div>

            <div class="imagenesCorousel" style="display: flex;">
                <div class="item foto1">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin/jardin1.jpg" alt="...">
                    </button>


                </div>
                <div class="item foto2">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin/jardin2.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto3">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin/jardin3.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto4">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin/jardin4.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto5">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin/jardin5.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto6">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="5" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin/jardin6.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto7">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="6" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin/jardin7.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto8">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="7" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin/jardin8.jpg" alt="...">
                    </button>

                </div>

            </div>


        </div>
    </div>

    <!-- FIN fotos galeria Jardines 1 Eventos -->

    <hr>

    <!-- Comienzo fotos galeria Jardines 2 Eventos -->
    <div class="accordion" id="accordionExample">
        <span class="nombreSala">Jardin Serenidad</span>
        <div class="nombreSala">


            <div>
                <i class="fas fa-users"> 300</i>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16" style="margin-left: 20px">
                    <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
                </svg>
                120m&sup2
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16" style="margin-left: 20px">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                </svg>
                3.000€
            </div>
        </div>
        <div class="contenedor containerFotosJardinesEventos">
            <div class="corouselImagenes">
                <div id="carousel2" class="carousel slide carouselImagenes " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/evento/sala_jardin2/jardin1.png" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin2/jardin2.png" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin2/jardin3.png" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin2/jardin4.png" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin2/jardin5.png" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin2/jardin6.png" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin2/jardin7.png" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin2/jardin8.png" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin2/jardin9.png" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala_jardin2/jardin10.png" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="imagenesCorousel" style="display: flex;">
                <div class="item foto1">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin2/jardin1.png" alt="...">
                    </button>


                </div>
                <div class="item foto2">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin2/jardin2.png" alt="...">
                    </button>

                </div>
                <div class="item foto3">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin2/jardin3.png" alt="...">
                    </button>

                </div>
                <div class="item foto4">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="3" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin2/jardin4.png" alt="...">
                    </button>

                </div>
                <div class="item foto5">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="4" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin2/jardin5.png" alt="...">
                    </button>

                </div>
                <div class="item foto6">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="5" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin2/jardin6.png" alt="...">
                    </button>

                </div>
                <div class="item foto7">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="6" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin2/jardin7.png" alt="...">
                    </button>

                </div>
                <div class="item foto8">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="7" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin2/jardin8.png" alt="...">
                    </button>

                </div>
                <div class="item foto8">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="8" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin2/jardin9.png" alt="...">
                    </button>

                </div>
                <div class="item foto8">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="9" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala_jardin2/jardin10.png" alt="...">
                    </button>

                </div>

            </div>


        </div>
    </div>
    <!-- FIN fotos galeria Jardines 2 Eventos -->

    <hr>
    <h1>Salones de eventos:</h1>
    <h6>Salas versátiles para eventos corporativos, conferencias y reuniones informales: Espacios elegantes y funcionales equipados con tecnología de vanguardia. Perfectos para reuniones de negocios, presentaciones, conferencias y eventos casuales. Nuestro equipo experto se encarga de cada detalle para garantizar el éxito de tu evento, sin importar su estilo o formato.</h6>
    <div class="shadow p-3 mb-5 bg-white rounded">
        <p>Descubre nuestras magníficas salas de eventos en Imperial Retreat. Ofrecemos una selección de espacios elegantes y sofisticados equipados con tecnología de vanguardia. Nuestro equipo profesional te brindará un servicio personalizado para garantizar que tu evento sea memorable. Además, contamos con servicios adicionales como catering de alta calidad y opciones de decoración personalizadas. Elige Imperial Retreat como el destino para tus eventos y planifica el evento de tus sueños con nosotros. ¡Contáctanos hoy mismo!</p>

    </div>
    <!-- Comiendo fotos galeria sala eventos 1 -->
    <div class="accordion" id="accordionExample">
        <span class="nombreSala">Salon Esmeralda</span>
        <div class="nombreSala">


            <div>
                <i class="fas fa-users">100</i>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16" style="margin-left: 20px">
                    <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
                </svg> 100m&sup2
                
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16" style="margin-left: 20px">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                </svg> 250€
            </div>
        </div>
        <div class="contenedor containerFotosJardinesEventos">
            <div class="corouselImagenes">
                <div id="carousel3" class="carousel slide carouselImagenes " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/evento/sala1/foto1.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala1/foto2.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala1/foto3.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala1/foto4.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala1/foto5.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala1/foto6.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala1/foto7.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala1/foto8.jpg" alt="...">
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="imagenesCorousel" style="display: flex;">
                <div class="item foto1">
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala1/foto1.jpg" alt="...">
                    </button>


                </div>
                <div class="item foto2">
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala1/foto2.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto3">
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala1/foto3.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto4">
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="3" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala1/foto4.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto5">
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="4" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala1/foto5.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto6">
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="5" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala1/foto6.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto7">
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="6" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala1/foto7.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto8">
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="7" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala1/foto8.jpg" alt="...">
                    </button>

                </div>


            </div>


        </div>
    </div>
    <!-- Fin fotos galeria sala de eventos 1 -->

    <hr>

    <!-- Comiendo fotos galeria sala eventos 2 -->
    <div class="accordion" id="accordionExample">
        <span class="nombreSala">Salon Majestic</span>
        <div class="nombreSala">

            
            <div>
            <i class="fas fa-users"> 200 </i>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16" style="margin-left: 20px">
                    <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
                </svg> 120m&sup2
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16" style="margin-left: 20px">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                </svg> 250€
            </div>
        </div>
        <div class="contenedor containerFotosJardinesEventos">
            <div class="corouselImagenes">
                <div id="carousel4" class="carousel slide carouselImagenes " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/evento/sala2/foto1.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala2/foto2.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala2/foto3.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala2/foto4.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="../img/evento/sala2/foto5.jpg" alt="...">
                        </div>


                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel4" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="imagenesCorousel" style="display: flex;">
                <div class="item foto1">
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala2/foto1.jpg" alt="...">
                    </button>


                </div>
                <div class="item foto2">
                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="1" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala2/foto2.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto3">
                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="2" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala2/foto3.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto4">
                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="3" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala2/foto4.jpg" alt="...">
                    </button>

                </div>
                <div class="item foto5">
                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="4" aria-current="true" aria-label="Slide 1">
                        <img src="../img/evento/sala2/foto5.jpg" alt="...">
                    </button>

                </div>

            </div>


        </div>
    </div>
    <!-- Fin fotos galeria sala de eventos 2 -->




    <!-- Boton de volver arriba para acceder al área de contacto -->
    <button onclick="scrollToTop()" id="btnScrollToTop" title="Volver arriba">&#8679;</button>




























    <!-- Comienzo galeria de fotos -->
    <!-- <div class="contenedor containerFotosEventos">
        <div class="item foto1"><img src="../img/evento/jardin1.jpg"></div>
        <div class="item foto2"><img src="../img/evento/jardin2.jpeg"></div>
        <div class="item foto3"><img src="../img/evento/jardin3.jpg"></div>
        <div class="item foto4"><img src="../img/evento/jardin4.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin5.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin6.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin7.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin8.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin9.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin10.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin11.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin12.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin13.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin14.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin15.jpg"></div>
        <div class="item foto5"><img src="../img/evento/jardin16.jpg"></div>
    </div> -->
    <!-- Fin galeria de fotos -->





</body>
<script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("btnScrollToTop").style.display = "block";
        } else {
            document.getElementById("btnScrollToTop").style.display = "none";
        }
    }

    function scrollToTop() {
        document.body.scrollTop = 0; // Para Safari
        document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
    }
</script>

</html>