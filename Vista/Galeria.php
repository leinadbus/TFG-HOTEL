<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria Imperial Retreat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">
    <link rel="stylesheet" type="text/css" href="galeria.css">

</head>

<script>

    function abrirCarrusel(index) {
        // Obtener las imágenes de la galería
        let galeria = document.getElementsByClassName('item');
        let imagenes = [];

        // Recorrer las imágenes y agregarlas al carrusel modal
        for (var i = 0; i < galeria.length; i++) {
            var imagenSrc = galeria[i].getElementsByTagName('img')[0].src;
            imagenes.push(`<div class="carousel-item ${i + 1 === index ? 'active' : ''}">
                      <img src="${imagenSrc}" alt="imagen ${i + 1}">
                    </div>`);
        }

        // Insertar las imágenes en el carrusel modal
        var carouselInner = document.querySelector('#carouselModal .carousel-inner');
        carouselInner.innerHTML = imagenes.join('');

        // Mostrar el carrusel modal
        var carouselModal = new bootstrap.Modal(document.getElementById('carouselModal'));
        carouselModal.show();
    }
</script>

<body>
    <!-- Carrusel modal -->
    <div id="carouselModal" class="modal fade" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="carouselItems" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Aquí se agregarán los elementos del carrusel dinámicamente -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselItems"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselItems"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>GALERIA DE FOTOS</h1>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#colapse1" aria-expanded="true" aria-controls="colapse1">
                    Espacios Comunes
                </button>
            </h2>
            <div id="colapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- Comienzo galeria de fotos -->
                    <div class="contenedor containerCollageFotos ">
                        <div class="item foto1"><img src="../img/fotos/balcon_hd.jpg" onclick="abrirCarrusel(1)"></div>
                        <div class="item foto2"><img src="../img/fotos/restaurantete.jpeg" onclick="abrirCarrusel(2)"></div>
                        <div class="item foto3"><img src="../img/fotos/playa_hd.jpg" onclick="abrirCarrusel(3)"></div>
                        <div class="item foto4"><img src="../img/fotos/instalacion1.jpg" onclick="abrirCarrusel(4)"></div>
                        <div class="item foto5"><img src="../img/fotos/instalacion3.jpg" onclick="abrirCarrusel(5)"></div>
                        <div class="item foto6"><img src="../img/fotos/instalacion2.jpg" onclick="abrirCarrusel(6)"></div>
                        <div class="item foto7"><img src="../img/fotos/comida.jpeg" onclick="abrirCarrusel(7)"></div>
                        <div class="item foto8"><img src="../img/fotos/jardin.jpg" onclick="abrirCarrusel(8)"></div>
                        <div class="item foto9"><img src="../img/fotos/terraza_completo.jpg" onclick="abrirCarrusel(9)"></div>
                        <div class="item foto10"><img src="../img/fotos/baño_vertical.jpg" onclick="abrirCarrusel(10)"></div>
                        <div class="item foto11"><img src="../img/fotos/baño_completo.jpg" onclick="abrirCarrusel(11)"></div>
                        <div class="item foto12"><img src="../img/fotos/baño_horizontal.jpg" onclick="abrirCarrusel(12)"></div>
                        <div class="item foto13"><img src="../img/fotos/baño_horizontal2.jpg" onclick="abrirCarrusel(13)"></div>
                    </div>
                    <!-- Fin galeria de fotos -->
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#colapse2" aria-expanded="false" aria-controls="colapse2">
                    Habitaciones
                </button>
            </h2>
            <div id="colapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- Comienzo galeria de fotos -->
                    <h1>Presidencial</h1>
                    <div class="contenedor containerFotosHabitacionPresidencial">
                        <div class="item foto1"><img src="../img/habitaciones/hab_presidencial/foto1.jpg" onclick="abrirCarrusel(14)"></div>
                        <div class="item foto2"><img src="../img/habitaciones/hab_presidencial/foto2.jpg" onclick="abrirCarrusel(15)"></div>
                        <div class="item foto3"><img src="../img/habitaciones/hab_presidencial/foto3.jpg" onclick="abrirCarrusel(16)"></div>
                        <div class="item foto4"><img src="../img/habitaciones/hab_presidencial/foto4.jpg" onclick="abrirCarrusel(17)"></div>
                        <div class="item foto5"><img src="../img/habitaciones/hab_presidencial/foto5.jpg" onclick="abrirCarrusel(18)"></div>
                        <div class="item foto6"><img src="../img/habitaciones/hab_presidencial/foto6.jpg" onclick="abrirCarrusel(19)"></div>
                        <div class="item foto7"><img src="../img/habitaciones/hab_presidencial/foto7.jpg" onclick="abrirCarrusel(20)"></div>
                        <div class="item foto8"><img src="../img/habitaciones/hab_presidencial/foto8.jpg" onclick="abrirCarrusel(21)"></div>
                        <div class="item foto9"><img src="../img/habitaciones/hab_presidencial/foto9.jpg" onclick="abrirCarrusel(22)"></div>
                        <div class="item foto10"><img src="../img/habitaciones/hab_presidencial/foto10.jpg" onclick="abrirCarrusel(23)"></div>
                    </div>

                    <br /><br /><br />
                    <h1>Lujo</h1>
                    <div class="contenedor containerFotosHabitacionLujo">
                        <div class="item foto1"><img src="../img/habitaciones/hab_lujo/foto1.jpg" onclick="abrirCarrusel(24)"></div>
                        <div class="item foto2"><img src="../img/habitaciones/hab_lujo/foto2.jpg" onclick="abrirCarrusel(25)"></div>
                        <div class="item foto3"><img src="../img/habitaciones/hab_lujo/foto3.jpg" onclick="abrirCarrusel(26)"></div>
                        <div class="item foto4"><img src="../img/habitaciones/hab_lujo/foto4.jpg" onclick="abrirCarrusel(27)"></div>
                        <div class="item foto5"><img src="../img/habitaciones/hab_lujo/foto5.jpg" onclick="abrirCarrusel(28)"></div>
                        <div class="item foto6"><img src="../img/habitaciones/hab_lujo/foto6.jpg" onclick="abrirCarrusel(29)"></div>
                        <div class="item foto7"><img src="../img/habitaciones/hab_lujo/foto7.jpg" onclick="abrirCarrusel(30)"></div>
                        <div class="item foto8"><img src="../img/habitaciones/hab_lujo/foto8.jpg" onclick="abrirCarrusel(31)"></div>
                    </div>

                    <br /><br /><br />
                    <h1>Estandar</h1>
                    <div class="contenedor containerFotosHabitacionComun">
                        <div class="item foto1"><img src="../img/habitaciones/hab_comun/foto1.jpg" onclick="abrirCarrusel(32)"></div>
                        <div class="item foto2"><img src="../img/habitaciones/hab_comun/foto2.jpg" onclick="abrirCarrusel(33)"></div>
                        <div class="item foto3"><img src="../img/habitaciones/hab_comun/foto3.jpg" onclick="abrirCarrusel(34)"></div>
                        <div class="item foto4"><img src="../img/habitaciones/hab_comun/foto4.jpg" onclick="abrirCarrusel(35)"></div>
                        <div class="item foto5"><img src="../img/habitaciones/hab_comun/foto5.jpg" onclick="abrirCarrusel(36)"></div>
                    </div>
                    <!-- Fin galeria de fotos -->
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#colapse4" aria-expanded="false" aria-controls="colapse4">
                    Salas de Eventos
                </button>
            </h2>
            <div id="colapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- Comienzo galeria de fotos -->
                    <div class="contenedor containerFotosEventos">
                        <div class="item foto1"><img src="../img/evento/sala_jardin/jardin1.jpg" onclick="abrirCarrusel(37)"></div>
                        <div class="item foto2"><img src="../img/evento/sala_jardin/jardin2.jpg" onclick="abrirCarrusel(38)"></div>
                        <div class="item foto3"><img src="../img/evento/sala_jardin/jardin3.jpg" onclick="abrirCarrusel(39)"></div>
                        <div class="item foto4"><img src="../img/evento/sala_jardin/jardin4.jpg" onclick="abrirCarrusel(40)"></div>
                        <div class="item foto5"><img src="../img/evento/sala_jardin/jardin5.jpg" onclick="abrirCarrusel(41)"></div>
                        <div class="item foto6"><img src="../img/evento/sala_jardin/jardin6.jpg" onclick="abrirCarrusel(42)"></div>
                        <div class="item foto7"><img src="../img/evento/sala_jardin/jardin7.jpg" onclick="abrirCarrusel(43)"></div>
                        <div class="item foto8"><img src="../img/evento/sala_jardin/jardin8.jpg" onclick="abrirCarrusel(44)"></div>
                        <div class="item foto9"><img src="../img/evento/sala_jardin2/jardin1.png" onclick="abrirCarrusel(45)"></div>
                        <div class="item foto10"><img src="../img/evento/sala_jardin2/jardin2.png" onclick="abrirCarrusel(46)"></div>
                        <div class="item foto11"><img src="../img/evento/sala_jardin2/jardin3.png" onclick="abrirCarrusel(47)"></div>
                        <div class="item foto12"><img src="../img/evento/sala_jardin2/jardin4.png" onclick="abrirCarrusel(48)"></div>
                        <div class="item foto13"><img src="../img/evento/sala_jardin2/jardin5.png" onclick="abrirCarrusel(49)"></div>
                        <div class="item foto14"><img src="../img/evento/sala_jardin2/jardin6.png" onclick="abrirCarrusel(50)"></div>
                        <div class="item foto15"><img src="../img/evento/sala_jardin2/jardin7.png" onclick="abrirCarrusel(51)"></div>
                        <div class="item foto16"><img src="../img/evento/sala_jardin2/jardin8.png" onclick="abrirCarrusel(52)"></div>
                        <div class="item foto17"><img src="../img/evento/sala_jardin2/jardin9.png" onclick="abrirCarrusel(53)"></div>
                        <div class="item foto18"><img src="../img/evento/sala_jardin2/jardin10.png" onclick="abrirCarrusel(54)"></div>
                        <div class="item foto19"><img src="../img/evento/sala1/foto1.jpg" onclick="abrirCarrusel(55)"></div>
                        <div class="item foto20"><img src="../img/evento/sala1/foto2.jpg" onclick="abrirCarrusel(56)"></div>
                        <div class="item foto21"><img src="../img/evento/sala1/foto3.jpg" onclick="abrirCarrusel(57)"></div>
                        <div class="item foto22"><img src="../img/evento/sala1/foto4.jpg" onclick="abrirCarrusel(58)"></div>
                        <div class="item foto23"><img src="../img/evento/sala1/foto5.jpg" onclick="abrirCarrusel(59)"></div>
                        <div class="item foto24"><img src="../img/evento/sala1/foto6.jpg" onclick="abrirCarrusel(60)"></div>
                        <div class="item foto25"><img src="../img/evento/sala1/foto7.jpg" onclick="abrirCarrusel(61)"></div>
                        <div class="item foto26"><img src="../img/evento/sala2/foto1.jpg" onclick="abrirCarrusel(62)"></div>
                        <div class="item foto27"><img src="../img/evento/sala2/foto2.jpg" onclick="abrirCarrusel(63)"></div>
                        <div class="item foto28"><img src="../img/evento/sala2/foto3.jpg" onclick="abrirCarrusel(64)"></div>
                        <div class="item foto29"><img src="../img/evento/sala2/foto4.jpg" onclick="abrirCarrusel(65)"></div>
                        <div class="item foto30"><img src="../img/evento/sala2/foto5.jpg" onclick="abrirCarrusel(66)"></div>
                    </div>
                    <!-- Fin galeria de fotos -->
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#colapse5" aria-expanded="false" aria-controls="colapse5">
                    Spa
                </button>
            </h2>
            <div id="colapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- Comienzo galeria de fotos -->
                    <div class="contenedor containerFotosSpa">
                        <div class="item foto1"><img src="../img/spa/foto1.jpg" onclick="abrirCarrusel(67)"></div>
                        <div class="item foto2"><img src="../img/spa/foto2.jpg" onclick="abrirCarrusel(68)"></div>
                        <div class="item foto3"><img src="../img/spa/foto3.jpg" onclick="abrirCarrusel(69)"></div>
                        <div class="item foto4"><img src="../img/spa/foto4.jpg" onclick="abrirCarrusel(70)"></div>
                    </div>
                    <!-- Fin galeria de fotos -->
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#colapse6" aria-expanded="false" aria-controls="colapse6">
                    Gimnasio
                </button>
            </h2>
            <div id="colapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- Comienzo galeria de fotos -->
                    <div class="contenedor containerFotosGym">
                        <div class="item foto1"><img src="../img/gym/foto1.jpg" onclick="abrirCarrusel(71)"></div>
                        <div class="item foto2"><img src="../img/gym/foto2.jpg" onclick="abrirCarrusel(72)"></div>
                        <div class="item foto3"><img src="../img/gym/foto3.jpg" onclick="abrirCarrusel(73)"></div>
                        <div class="item foto4"><img src="../img/gym/foto4.jpg" onclick="abrirCarrusel(74)"></div>
                    </div>
                    <!-- Fin galeria de fotos -->
                </div>
            </div>
        </div>
    </div>

    <!-- <h1>PAGINA DE GALERIA DE FOTOS </h1>
    <div class="row">
        <div class="col-md-3">
            <a href="img/fotos/instalacion1.jpg" target="_blank">
                <div class="overlay">
                    <img src="img/fotos/instalacion1.jpg" alt="Imagen 1" class="img-fluid">
                    <div class="zoom-icon">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="..img/fotos/instalacion2.jpg" target="_blank">
                <div class="overlay">
                    <img src="img/fotos/instalacion2.jpg" alt="Imagen 2" class="img-fluid">
                    <div class="zoom-icon">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="img/fotos/instalacion3.jpg" target="_blank">
                <div class="overlay">
                    <img src="img/fotos/instalacion3.jpg" alt="Imagen 3" class="img-fluid">
                    <div class="zoom-icon">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="img/fotos/jardin.jpg" target="_blank">
                <div class="overlay">
                    <img src="img/fotos/jardin.jpg" alt="Imagen 4" class="img-fluid">
                    <div class="zoom-icon">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
        </div>
    </div> -->

<script>
   function preloadImages(imageArray) {
  let images = [];
  for (let i = 0; i < imageArray.length; i++) {
    images[i] = new Image();
    images[i].src = imageArray[i];
    
  }
  return images;
}

// Definir la lista de imágenes para pre-cargar
let imageList = [
    // habitaciones
  '../img/habitaciones/hab_presidencial/foto1.jpg',
"../img/habitaciones/hab_presidencial/foto2.jpg",
"../img/habitaciones/hab_presidencial/foto3.jpg",
"../img/habitaciones/hab_presidencial/foto4.jpg",
"../img/habitaciones/hab_presidencial/foto5.jpg",
"../img/habitaciones/hab_presidencial/foto6.jpg",
"../img/habitaciones/hab_presidencial/foto7.jpg",
"../img/habitaciones/hab_presidencial/foto8.jpg",
"../img/habitaciones/hab_presidencial/foto9.jpg",
"../img/habitaciones/hab_presidencial/foto10.jpg",
"../img/habitaciones/hab_lujo/foto1.jpg",
"../img/habitaciones/hab_lujo/foto2.jpg",
"../img/habitaciones/hab_lujo/foto3.jpg",
"../img/habitaciones/hab_lujo/foto4.jpg",
"../img/habitaciones/hab_lujo/foto5.jpg",
"../img/habitaciones/hab_lujo/foto6.jpg",
"../img/habitaciones/hab_lujo/foto7.jpg",
"../img/habitaciones/hab_lujo/foto8.jpg",
"../img/habitaciones/hab_comun/foto1.jpg",
"../img/habitaciones/hab_comun/foto2.jpg",
"../img/habitaciones/hab_comun/foto3.jpg",
"../img/habitaciones/hab_comun/foto4.jpg",
"../img/habitaciones/hab_comun/foto5.jpg",
    // eventos
"../img/evento/sala_jardin/jardin1.jpg",
"../img/evento/sala_jardin/jardin2.jpg",
"../img/evento/sala_jardin/jardin3.jpg",
"../img/evento/sala_jardin/jardin4.jpg",
"../img/evento/sala_jardin/jardin5.jpg",
"../img/evento/sala_jardin/jardin6.jpg",
"../img/evento/sala_jardin/jardin7.jpg",
"../img/evento/sala_jardin/jardin8.jpg",

"../img/evento/sala_jardin2/jardin1.png",
"../img/evento/sala_jardin2/jardin2.png",
"../img/evento/sala_jardin2/jardin3.png",
"../img/evento/sala_jardin2/jardin4.png",
"../img/evento/sala_jardin2/jardin5.png",
"../img/evento/sala_jardin2/jardin6.png",
"../img/evento/sala_jardin2/jardin7.png",
"../img/evento/sala_jardin2/jardin8.png",
"../img/evento/sala_jardin2/jardin9.png",
"../img/evento/sala_jardin2/jardin10.png",

"../img/evento/sala1/foto1.jpg",
"../img/evento/sala1/foto2.jpg",
"../img/evento/sala1/foto3.jpg",
"../img/evento/sala1/foto4.jpg",
"../img/evento/sala1/foto5.jpg",
"../img/evento/sala1/foto6.jpg",
"../img/evento/sala1/foto7.jpg",

"../img/evento/sala2/foto1.jpg",
"../img/evento/sala2/foto2.jpg",
"../img/evento/sala2/foto3.jpg",
"../img/evento/sala2/foto4.jpg",
"../img/evento/sala2/foto5.jpg",


    // spa
"../img/spa/foto1.jpg",
"../img/spa/foto2.jpg",
"../img/spa/foto3.jpg",
"../img/spa/foto4.jpg",
    // gimnasio
"../img/gym/foto1.jpg",
"../img/gym/foto2.jpg",
"../img/gym/foto3.jpg",
"../img/gym/foto4.jpg"

  
];

// Pre-cargar las imágenes
let preloadedImages = preloadImages(imageList);

// Esperar a que todas las imágenes estén cargadas
Promise.all(preloadedImages.map(img => img.decode())).then(() => {
  // Aquí se puede hacer algo después de que todas las imágenes estén cargadas
  console.log('Todas las imágenes están cargadas');
}); 
</script>
</body>

</html>