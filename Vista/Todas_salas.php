<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de habitaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" type="text/css" href="../Vista/style.css">
    <link rel="stylesheet" type="text/css" href="../Vista/mediaQuery.css">
</head>
<body>
<?php
        include "../Controlador/controlador_admin.php";
?>

<h1>Todas las habitaciones</h1>
<br><br><br>
<style>table, td, th{border: solid black 1px;}</style>
                    <table>
                    <tr>
                        <th>cod_sala</th>
                        <th>Tipo</th>
                        <th>Precio</th>
                        <th>Planta</th>
                        <th>Estado</th>
                        <th>Aforo</th>
                        <th>Tipo de sala</th>
                        <th>Ubicación</th>
                        <th>Descripción</th>
                        <th>Localidad</th>
                        <th>cod_estancia</th>

                    </tr>
                    <?php
                 $salaGeneral->muestraSalas();
                    ?>      

</table>
<br><br><br>
</body>
</html>