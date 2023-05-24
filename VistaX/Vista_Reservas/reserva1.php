<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="llegada" name="llegada">Llegada</label>
        <input type="date" name="fechaLLegada"><br/>

        <label for="salida" name="salida">Salida</label>
        <input type="date" name="fechaSalida"><br/>

        <label for="adultos" name="adultos">Adultos</label>
        <input type="number" name="nAdultos"><br/>

        <label for="niños" name="niños">Niños</label>
        <input type="number" name="nNIños"><br/>

        <label for="codPromocional" name="cdPromocional">Código Promocional</label>
        <input type="text" name="codPromocional"><br/>

        <label for="tipoHabitacion" name="tipoHabitacion">Código Promocional</label>
        <select>
            <option>Imperial</option>
            <option>Presidencial</option>
            <option>Comun</option>
        </select>

        <input type="submit" name="reservar" value="Reservar">
    </form>
    
</body>
</html>

<?php
    if(isset($_POST['reservar'])){
        $fechaLLegada = $_POST['fechaLLegada'];
        $fechaSalida = $_POST['fechaSalida'];
        $nAdultos = $_POST['nAdultos'];
        $nNiños = $_POST['nNIños'];
        $codPromocional = $_POST['codPromocional'];
    
    }

    echo "<h1>HABITACIONES LIBRES</h1>";
    require_once "../../Modelo/Reserva.php";
    $crud = new Reserva('habitacion');
    $resultado = $crud->mostrarHabitacionesLibres();


    echo "--------------------------------------------------------------------------------";
    $crud->reservarHabitacionPorTipo();
?>