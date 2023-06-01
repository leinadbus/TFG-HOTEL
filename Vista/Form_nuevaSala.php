<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Sala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" type="text/css" href="../Vista/style.css">
    <link rel="stylesheet" type="text/css" href="../Vista/mediaQuery.css">
</head>
<body>
<?php
        include "../Controlador/controlador_admin.php";
?>

<h1>Nueva Sala</h1>
<form method="post">

        <div class="form-group row">
            <label for="tipo_Sala" class="col-sm-2 col-form-label col-form-label-lg">Tipo de sala:</label>
                <div class="col-sm-10">
                    <select name="tipo_Sala" onclick="actualizarCampos()" class="form-control form-control-lg" id="tipo_Sala">
                        <option value="reunion">Reunion</option>
                        <option value="conferencia">conferencia</option>
                        <option value="boda">Bodas</option>
                    </select>
                </div>
        </div>
        
<br>

        <div class="form-group row">
            <label for="aforo" class="col-sm-2 col-form-label col-form-label-lg">Aforo máximo:</label>
                <div class="col-sm-10">
                    <input type="number" name="aforo" id="aforo" class="form-control form-control-lg">
                </div>
        </div>

<br>

        <div class="form-group row">
            <label for="precioSala" class="col-sm-2 col-form-label col-form-label-lg">Precio:</label>
                <div class="col-sm-10">
                    <input type="number" name="precio" id="precioSala" class="form-control form-control-lg">
                </div>
        </div>

<br>
    
        <div class="form-group row">    
            <label for="descripcionSala" class="col-sm-2 col-form-label col-form-label-lg">Descripción:</label>
                <div class="col-sm-10">
                <textarea class="form-control form-control-lg" name="descripcion" id="descripcionSala" rows="3" ></textarea>
                    <!-- <input type="text" name="descripcion" id="descripcionSala" class="form-control form-control-lg"> -->
                </div>
        </div>

<br>

        <div class="form-group row">
            <label for="planta" class="col-sm-2 col-form-label col-form-label-lg">Planta:</label>
                <div class="col-sm-10">
                    <select name="planta" class="form-control form-control-lg">
                        <option value="0">Planta 0</option>
                        <option value="1">Planta 1</option>
                        <option value="2">Planta 2</option>
                        <option value="3">Planta 3</option>
                        <option value="4">Planta 4</option>
                        <option value="5">Planta 5</option>
                        <option value="6">Planta 6</option>
                        <option value="7">Planta 7</option>
                    </select>
                </div>
        </div>

<br>

        <div class="form-group row">
            <label for="tipo" class="col-sm-2 col-form-label col-form-label-lg">Tipo:</label>
                <div class="col-sm-10">
                    <select name="tipo" class="form-control form-control-lg">
                        <option value="comun">Común</option>
                        <option value="lujo">Lujo</option>
                        <option value="presidencial">Presidencial</option>
                    </select>
            </div>
        </div>

<br>

        <div class="form-group row">
            <label for="cod_estancia" class="col-sm-2 col-form-label col-form-label-lg">Código de Estancia:</label>
                <div class="col-sm-10">
                    <input type="number" name="cod_estancia" id="cod_estancia" class="form-control form-control-lg"> 
                </div>
        </div>

<br>

        <div class="form-group row">
            <label for="ubicacion" class="col-sm-2 col-form-label col-form-label-lg">Ubicación:</label>
                <div class="col-sm-10">
                    <select name="ubicacion" class="form-control form-control-lg">
                        <option value="interior">Interior</option>
                        <option value="exterior">Exterior</option>
                        <option value="azotea">Azotea</option>
                    </select>
                </div>
        </div>

<br>
   
        <div class="form-group row">
            <label for="localidad" class="col-sm-2 col-form-label col-form-label-lg">Localidad:</label>
                <div class="col-sm-10">
                    <select name="localidad" class="form-control form-control-lg">
                        <option value="madrid" selected>Madrid</option>
                    </select>
                </div>
        </div>
       
 <br>

        <div class="form-group row">
            <label for="cod_Sala" class="col-sm-2 col-form-label col-form-label-lg">Código de Sala:</label>
                <div class="col-sm-10">
                    <input type="number" name="cod_Sala" id="cod_Sala" class="form-control form-control-lg">
                </div>
        </div>

<br>
                <!-- Valores ocultos para construir el objeto -->
                <input type="hidden" name="estado" value="libre">
        <input type="submit" name="btnNuevaSala" id="" class="btn btn-primary btn-lg btn-block">
    </form>



    <script>
        function actualizarCampos() {
            const tipoSala = document.getElementById('tipo_Sala');
            const precioHabitacion = document.getElementById('precioSala');
            const descripcionHabitacion = document.getElementById('descripcionSala');

            const tipoSeleccionado = tipoSala.value;

            if (tipoSeleccionado === 'reunion') {

            precioHabitacion.value = 250;
            descripcionHabitacion.value = 'Nuestra sala de reuniones es el espacio perfecto para llevar a cabo encuentros corporativos y de negocios. Con un ambiente elegante y sofisticado, esta sala ofrece todas las comodidades necesarias para reuniones productivas. Equipada con tecnología audiovisual de última generación y mobiliario ergonómico, brindamos un entorno propicio para presentaciones, debates y sesiones de trabajo. Nuestro equipo de eventos estará disponible para satisfacer todas las necesidades, desde la disposición de mesas y sillas hasta servicios de catering personalizados.';

            } else if (tipoSeleccionado === 'conferencia') {

                precioHabitacion.value = 2500;
                descripcionHabitacion.value = 'Nuestra sala de conferencias está diseñada para acoger eventos de gran envergadura, como conferencias, seminarios y presentaciones. Con capacidad para un gran número de asistentes, esta sala ofrece un ambiente amplio y confortable, equipado con sistemas de sonido de alta calidad y proyección audiovisual de primer nivel. El diseño adaptable de la sala permite diferentes configuraciones para adaptarse a las necesidades específicas de cada evento. Nuestro equipo de tecnología estará presente para brindar soporte técnico durante todo el evento, asegurando una experiencia sin contratiempos.';

            } else if (tipoSeleccionado === 'boda') {

                precioHabitacion.value = 3000;
                descripcionHabitacion.value = 'Nuestra sala de bodas es el lugar perfecto para celebrar ese día especial con elegancia y estilo. Con una decoración exquisita y un ambiente romántico, esta sala ofrece un entorno mágico para celebrar matrimonios y recepciones. Desde la iluminación hasta la disposición de las mesas, cuidamos cada detalle para crear una atmósfera inolvidable. Nuestro equipo de expertos en eventos estará a su disposición para asistir en la planificación y coordinación de cada aspecto de su boda, incluyendo la selección de menús personalizados, la decoración floral y la organización de servicios adicionales, como música en vivo o fotógrafos profesionales.';
                
            } else {

            precioHabitacion.value = '';
            descripcionHabitacion.value = '';

            }
        }

</script>
</body>
</html>