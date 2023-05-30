<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones Imperial Retreat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">
    <link rel="stylesheet" type="text/css" href="habitacion.css">
</head>


<body>
    
    <br>
    <div class="shadow p-3 mb-5 bg-white rounded">
        <h3>Nuestras Habitaciones:</h3>
        <p>
        En el Imperial Retreat, todas nuestras habitaciones son un oasis de lujo y confort.
        Ofrecemos tres tipos de habitaciones, cada una con su propia personalidad y características únicas.
        Las habitaciones tipo Imperial son las más exclusivas, con una decoración majestuosa y comodidades de alta gama.
        Las habitaciones tipo de lujo también son una experiencia de ensueño, con una elegante decoración y una amplia
        variedad de servicios. Incluso nuestras habitaciones tipo estándar ofrecen un alto nivel de confort y calidad, con
        una decoración moderna y todas las comodidades necesarias para una estancia relajante. Todas nuestras habitaciones
        están diseñadas para brindar una experiencia inolvidable a nuestros huéspedes.
        </p>
    </div>
    <hr>
    <div class="accordion" id="accordionExample">


        <div id="colapse2" class="accordion-collapse " data-bs-parent="#accordionExample">
            <div class="accordion-body ">
                <!-- Comienzo galeria de fotos Presidencial -->
                <div></div>
                <h1>Presidencial</h1>
                <div class="descripcion ">
                    La Suite Presidencial del Hotel Imperial es un alojamiento de lujo con cuatro habitaciones, una de ellas principal, y dos baños. Cuenta con un amplio salón, una habitación principal espaciosa con una cama king-size, un baño privado con bañera de hidromasaje, una ducha de lluvia y una selección de productos de baño de lujo. También dispone de un elegante comedor privado, un área de trabajo bien equipada y vistas panorámicas impresionantes de la ciudad. Los huéspedes disfrutan de servicios exclusivos como un mayordomo personal disponible las 24 horas del día, servicio de limusina y acceso privilegiado a áreas VIP del hotel. Es la opción perfecta para quienes buscan una experiencia de lujo, comodidad y servicio personalizado.
                </div>
                <div class="caracteristicas">
                    <i class="fas fa-bed fa-0.5x"></i>4
                    <i class="fas fa-couch fa-0.5x"></i>1
                    <i class="fas fa-bath fa-0.5x"></i>2
                    <ion-icon name="person-outline" style="font-size: 40px;"></ion-icon>6
                    <i class="fas fa-ruler-combined fa-1x"></i> 80m&sup2
                </div>

                <div class="contenedor containerFotosHabitacionPresidencial">
                    <div class="corouselImagenes" style="background-color: green;">
                        <div id="carousel" class="carousel slide carouselImagenes " data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/habitaciones/hab_presidencial/foto1.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_presidencial/foto2.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_presidencial/foto3.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_presidencial/foto4.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_presidencial/foto5.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_presidencial/foto6.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_presidencial/foto7.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_presidencial/foto8.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_presidencial/foto9.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_presidencial/foto10.jpg" alt="...">
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


                    <div class="item foto1">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_presidencial/foto1.jpg">
                        </button>


                    </div>
                    <div class="item foto2">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_presidencial/foto2.jpg">
                        </button>

                    </div>
                    <div class="item foto3">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_presidencial/foto3.jpg">
                        </button>

                    </div>
                    <div class="item foto4">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_presidencial/foto4.jpg">
                        </button>

                    </div>
                    <div class="item foto5">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_presidencial/foto5.jpg">
                        </button>


                    </div>
                    <div class="item foto6">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="5" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_presidencial/foto6.jpg">
                        </button>

                    </div>
                    <div class="item foto7">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="6" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_presidencial/foto7.jpg">
                        </button>

                    </div>
                    <div class="item foto8">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="7" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_presidencial/foto8.jpg">
                        </button>

                    </div>
                    <div class="item foto9">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="8" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_presidencial/foto9.jpg">
                        </button>

                    </div>
                    <div class="item foto10">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="9" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_presidencial/foto10.jpg">
                        </button>

                    </div>


                </div>
                <!-- FIN fotos galeria Presidencial -->

                <br /><br /> <hr><br />
                <h1>Lujo</h1>
                <div class="descripcion">

                    La Suite de Lujo del Hotel Imperial es un oasis de elegancia y comodidad. Con 3 camas, un sofá cama y un baño privado, esta suite ofrece un amplio espacio y una decoración sofisticada. La habitación principal cuenta con una cama king-size y lujosas comodidades para un descanso reparador. El baño de mármol incluye una bañera de hidromasaje y una ducha de lluvia para momentos de relajación. Además, la suite cuenta con una sala de estar separada, un área de trabajo y vistas panorámicas de la ciudad. Los servicios exclusivos y las instalaciones de primera clase del hotel completan una experiencia de lujo inigualable.
                </div>
                <div class="caracteristicas">
                    <i class="fas fa-bed fa-0.5x"></i>3
                    <i class="fas fa-couch fa-0.5x"></i>1
                    <i class="fas fa-bath fa-0.5x"></i>1
                    <ion-icon name="person-outline" style="font-size: 40px;"></ion-icon>4
                    <i class="fas fa-ruler-combined fa-1x"></i> 60m&sup2
                </div>
                <!-- INICIO fotos galeria lujo -->
                <div class="contenedor containerFotosHabitacionPresidencial">
                    <div class="corouselImagenes">
                        <div id="carousel2" class="carousel slide carouselImagenes" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/habitaciones/hab_lujo/foto1.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_lujo/foto2.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_lujo/foto3.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_lujo/foto4.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_lujo/foto5.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_lujo/foto6.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_lujo/foto7.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_lujo/foto8.jpg" alt="...">
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

                    <div class="item foto1">
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_lujo/foto1.jpg">
                        </button>


                    </div>
                    <div class="item foto2">
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_lujo/foto2.jpg">
                        </button>

                    </div>
                    <div class="item foto3">
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_lujo/foto3.jpg">
                        </button>

                    </div>
                    <div class="item foto4">
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="3" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_lujo/foto4.jpg">
                        </button>

                    </div>
                    <div class="item foto5">
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="4" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_lujo/foto5.jpg">
                        </button>


                    </div>
                    <div class="item foto6">
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="5" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_lujo/foto6.jpg">
                        </button>

                    </div>
                    <div class="item foto7">
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="6" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_lujo/foto7.jpg">
                        </button>

                    </div>
                    <div class="item foto8">
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="7" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_lujo/foto8.jpg">
                        </button>

                    </div>

                </div>
                <!-- FIN fotos galeria Lujo -->
                <!-- <h1>Lujo</h1>
                <div class="contenedor containerFotosHabitacionLujo">
                    <div class="item foto1"><img src="../img/habitaciones/hab_lujo/foto1.jpg"></div>
                    <div class="item foto2"><img src="../img/habitaciones/hab_lujo/foto2.jpg"></div>
                    <div class="item foto3"><img src="../img/habitaciones/hab_lujo/foto3.jpg"></div>
                    <div class="item foto4"><img src="../img/habitaciones/hab_lujo/foto4.jpg"></div>
                    <div class="item foto5"><img src="../img/habitaciones/hab_lujo/foto5.jpg"></div>
                    <div class="item foto6"><img src="../img/habitaciones/hab_lujo/foto6.jpg"></div>
                    <div class="item foto7"><img src="../img/habitaciones/hab_lujo/foto7.jpg"></div>
                    <div class="item foto8"><img src="../img/habitaciones/hab_lujo/foto8.jpg"></div>
                </div> -->
                <br /><br /><br />
                <h1>Estándar</h1>
                <div class="descripcion">
                    Las Habitaciones Estándar del Hotel Imperial ofrecen un espacio acogedor y confortable con 2 camas, 1 sofá y un baño privado. Con una decoración elegante y tonos suaves, estas habitaciones proporcionan un ambiente tranquilo para descansar. Las cómodas camas matrimoniales y la ropa de cama de calidad aseguran un sueño placentero. El baño privado cuenta con una ducha revitalizante y artículos de aseo. Además, encontrarás un espacio de trabajo con escritorio, televisión de pantalla plana y acceso a Internet. El servicio de limpieza diario y el personal amable completan una estancia cómoda y asequible en el Hotel Imperial.
                </div>
                <div class="caracteristicas">
                    <i class="fas fa-bed fa-0.5x"></i>2
                    <i class="fas fa-couch fa-0.5x"></i>1
                    <i class="fas fa-bath fa-0.5x"></i>1
                    <ion-icon name="person-outline" style="font-size: 40px;"></ion-icon>4
                    <i class="fas fa-ruler-combined fa-1x"></i> 40m&sup2
                </div>
                <!-- INICIO fotos galeria comun -->
                <div class="contenedor containerFotosHabitacionPresidencial">
                    <div class="corouselImagenes">
                        <div id="carousel3" class="carousel slide carouselImagenes" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/habitaciones/hab_comun/foto1.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_comun/foto2.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_comun/foto3.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_comun/foto4.jpg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/habitaciones/hab_comun/foto5.jpg" alt="...">
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

                    <div class="item foto1">
                        <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_comun/foto1.jpg">
                        </button>


                    </div>
                    <div class="item foto2">
                        <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_comun/foto2.jpg">
                        </button>

                    </div>
                    <div class="item foto3">
                        <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_comun/foto3.jpg">
                        </button>

                    </div>
                    <div class="item foto4">
                        <button type="button" data-bs-target="#carousel3" data-bs-slide-to="3" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_comun/foto4.jpg">
                        </button>

                    </div>
                    <div class="item foto5">
                        <button type="button" data-bs-target="#carousel3" data-bs-slide-to="4" aria-current="true" aria-label="Slide 1">
                            <img src="../img/habitaciones/hab_comun/foto5.jpg">
                        </button>


                    </div>


                </div>
                <!-- INICIO fotos galeria comun -->
                <!-- <br /><br /><br />
                <h1>Estándar</h1>
                <div class="contenedor containerFotosHabitacionComun">
                    <div class="item foto1"><img src="../img/habitaciones/hab_comun/foto1.jpg"></div>
                    <div class="item foto2"><img src="../img/habitaciones/hab_comun/foto2.jpg"></div>
                    <div class="item foto3"><img src="../img/habitaciones/hab_comun/foto3.jpg"></div>
                    <div class="item foto4"><img src="../img/habitaciones/hab_comun/foto4.jpg"></div>
                    <div class="item foto5"><img src="../img/habitaciones/hab_comun/foto5.jpg"></div>
                </div> -->
                <!-- Fin galeria de fotos -->
            </div>

        </div>



    </div>
</body>

</html>
<script>
    const items = document.querySelectorAll('.image');

    items.forEach(item => {
        item.addEventListener('click', () => {
            const imageUrl = item.getAttribute('data-src');
            window.open(imageUrl, '_blank');
        });
    });
</script>