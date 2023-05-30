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
        <label for="cod_estancia">Código de Estancia:</label>
        <input type="number" name="cod_estancia" id="">
<br>
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="">
        <br>
        <label for="ubicacion">Ubicación:</label>
        <select name="ubicacion">
            <option value="interior">Interior</option>
            <option value="exterior">Exterior</option>
            <option value="azotea">Azotea</option>
        </select>
        <br>
        <label for="planta">Planta:</label>
        <select name="planta">
            <option value="0">Planta 0</option>
            <option value="1">Planta 1</option>
            <option value="2">Planta 2</option>
            <option value="3">Planta 3</option>
            <option value="4">Planta 4</option>
            <option value="5">Planta 5</option>
            <option value="6">Planta 6</option>
            <option value="7">Planta 7</option>
        </select>
        <br>
        <label for="tipo">Tipo:</label>
        <select name="tipo">
            <option value="comun">Común</option>
            <option value="lujo">Lujo</option>
            <option value="presidencial">Presidencial</option>
        </select>
        <br>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="">
        <br>
       
        <!-- Valores ocultos para construir el objeto -->
        <label for="localidad">Localidad:</label>
        <select name="localidad" >
             <option value="madrid" selected>Madrid</option>
        </select>
        <input type="hidden" name="estado" value="libre">
            <br>
        <!-- <input type="submit" name="btnNuevaEstancia" id=""> -->
    <!-- </form>
    <form method="post"> -->
        
        <label for="cod_Sala">Código de Sala:</label>
        <input type="number" name="cod_Sala" id="">
        <br>
        <!-- <label for="cod_estancia">Código de Estancia:</label>
        <select name="cod_estancia">
        <?php
        // foreach ($estanciasDisponibles as $key) {
        //    echo "<option value='$key->cod_estancia'>".$key->cod_estancia."</option>";
        // }
        ?>
        </select>
        <br> -->
        <label for="aforo">Aforo máximo:</label>
        <input type="number" name="aforo" id="">
        <br>
        <label for="tipo_Sala">Tipo de sala:</label>
        <select name="tipo_Sala">
            <option value="reunion">Reunion</option>
            <option value="conferencia">conferencia</option>
            <option value="boda">Bodas</option>
        </select>
        <br>
        <input type="submit" name="btnNuevaSala" id="">
    </form>
</body>
</html>