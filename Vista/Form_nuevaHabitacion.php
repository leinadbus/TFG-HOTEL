<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir habitación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" type="text/css" href="../Vista/style.css">
    <link rel="stylesheet" type="text/css" href="../Vista/mediaQuery.css">
</head>
<body>
<?php
        include "../Controlador/controlador_admin.php";
?>

<h1>Nueva Habitación</h1>
<form method="post">
        <div class="form-group row">
                <label for="tipoHabitacion" class="col-sm-2 col-form-label col-form-label-lg">Tipo:</label>
                <div class="col-sm-10">
                    <select name="tipo" id="tipoHabitacion" onclick="actualizarCampos()"  class="form-control form-control-lg">
                        <option value="comun" selected>Común</option>
                        <option value="lujo">Lujo</option>
                        <option value="presidencial">Presidencial</option>
                    </select>
                </div>
        </div>
 
<br>
        <div class="form-group row">
                <label for="precioHabitacion" class="col-sm-2 col-form-label col-form-label-lg">Precio:</label>
                <div class="col-sm-10">
                    <input  type="number" name="precio" id="precioHabitacion" class="form-control form-control-lg">
                </div>
        </div>
<br>
        <div class="form-group row">
            <label for="descripcion" class="col-sm-2 col-form-label col-form-label-lg">Descripción:</label>
                <div class="col-sm-10">
                    <textarea class="form-control form-control-lg" name="descripcion" id="descripcionHabitacion" rows="3" ></textarea>
                <!-- <input type="text" rows="4" cols="50" name="descripcion" id="descripcionHabitacion"> -->
                </div>
        </div>
<br>
        <div class="form-group row">
            <label for="num_camas" class="col-sm-2 col-form-label col-form-label-lg">Número de camas:</label>
                <div class="col-sm-10">
                    <select name="num_camas" class="form-control form-control-lg">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="tipo_bano" class="col-sm-2 col-form-label col-form-label-lg">Tipo de baño:</label>
                <div class="col-sm-10">
                    <select name="tipo_bano" class="form-control form-control-lg">
                        <option value="bañera">Bañera</option>
                        <option value="ducha">Plato de ducha</option>
                        <option value="jacuzzi">Jacuzzi</option>
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
            <label for="localidad" class="col-sm-2 col-form-label col-form-label-lg">Localidad:</label>
                <div class="col-sm-10">
                    <select name="localidad" class="form-control form-control-lg">
                        <option value="madrid" selected>Madrid</option>
                    </select>
            </div>
        </div>

<br>
        <div class="form-group row">
            <label for="cod_habitacion" class="col-sm-2 col-form-label col-form-label-lg">Código de Habitación:</label>
                <div class="col-sm-10">
                    <input type="number" name="cod_habitacion" id="cod_habitacion" class="form-control form-control-lg">
                </div>
        </div>
<br>
         <!-- Valores ocultos para construir el objeto -->
         <input type="hidden" name="estado" value="libre">

        <input type="submit" name="btnNuevaHabitacion" id="" class="btn btn-primary btn-lg btn-block">
    </form>


    <script>
       function actualizarCampos() {
            const tipoHabitacion = document.getElementById('tipoHabitacion');
            const precioHabitacion = document.getElementById('precioHabitacion');
            const descripcionHabitacion = document.getElementById('descripcionHabitacion');

            const tipoSeleccionado = tipoHabitacion.value;

            if (tipoSeleccionado === 'presidencial') {

            precioHabitacion.value = 1500;
            descripcionHabitacion.value = 'Viva la grandeza y el lujo sin límites en nuestras habitaciones presidenciales. Espacios suntuosos, diseño extraordinario y servicios exclusivos se combinan para crear una experiencia inigualable. Disfrute de amplios salones, jacuzzi privado y vistas panorámicas. Sumérjase en el lujo supremo y deleite todos sus sentidos. Bienvenido a un mundo de opulencia en nuestras habitaciones presidenciales, donde los sueños se hacen realidad.';

            } else if (tipoSeleccionado === 'lujo') {

                precioHabitacion.value = 1000;
                descripcionHabitacion.value = 'Sumérjase en el refinamiento absoluto de nuestras habitaciones de lujo. Diseño exquisito, comodidades de primer nivel y atención personalizada le brindarán una experiencia inigualable. Disfrute de espacios amplios, elegancia contemporánea y vistas impresionantes. Relájese en un oasis de lujo y descubra un nuevo estándar de indulgencia. Bienvenido al exclusivo mundo de nuestras habitaciones de lujo, donde cada momento es inolvidable.';

            } else if (tipoSeleccionado === 'comun') {

                precioHabitacion.value = 500;
                descripcionHabitacion.value = 'Sumérjase en la elegancia de nuestras habitaciones estándar de lujo. Cada espacio ha sido meticulosamente diseñado para brindarle una experiencia exclusiva. Disfrute de una decoración sofisticada, comodidades modernas y una atención impecable. Relájese en una cama de lujo y deleite sus sentidos con detalles refinados. En este santuario de distinción, su confort y satisfacción son nuestra máxima prioridad. Viva momentos inolvidables en nuestras habitaciones estándar, donde la excelencia se encuentra a su alcance.';
                
            } else {

            precioHabitacion.value = '';
            descripcionHabitacion.value = '';

            }
        }
</script>
</body>
</html>