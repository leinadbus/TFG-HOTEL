<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Fechas</title>
</head>
<body>
	<fieldset>
		<form action="" method="POST">
			<label for="fecha_inicio">Fecha de Inicio:</label>
			<input type="date" id="fecha_inicio" name="fecha_inicio" value="<?php echo date('Y-m-d'); ?>">
			<br><br>
			<label for="fecha_fin">Fecha de Fin:</label>
			<input type="date" id="fecha_fin" name="fecha_fin" value="<?php echo date('Y-m-d', strtotime('+1 week')); ?>">
			<br><br>
			<input type="submit" value="Enviar">
		</form>
	</fieldset>

	<fieldset>
		<form method="POST">
			
			<label>Codigo</label>
			<select name="codigo" id="codigo_id">
				<?php
					require_once "../Modelo/CRUD.php";
					$crud = new CRUD('habitacion');
					$resultado = $crud->obtenerTodo();
					foreach($resultado as $fila) {
						echo "<option value=".$fila['cod_habitacion'].">".$fila['cod_habitacion']."</option>";
					}
				?>
			</select>
			<input type="submit" value="Enviar">
		</form>
	</fieldset>

	<fieldset>
		<form method="POST">
			<h4>Listado de habitaciones disponibles para reservar, porfavor </h4>
		</form>
	</fieldset>


		<!-- boton para cambiar el estado de la habitacion  -->
		<?php if(isset($_REQUEST['codigo'])){ require_once "../Modelo/Reserva.php"; $reserva = new Reserva(); $reserva->reservarHabitacion($_REQUEST['codigo']);}?>
	
</body>
</html>

<?php
	require_once "../Modelo/conexion.php";
	require_once "../Modelo/Reserva.php";
	$reserva = new Reserva();


	echo "<h3>TABLA DE HABITACIONES LIBRES</h3>";
	$habitacionesLibres = $reserva->mostrarHabitacionesLibres();
	
	echo "<h3> TABLA DE CONTROL DE ESTADO DE LAS HABITACIONES</h3>";
	$estadoTodasHabitaciones = $reserva->mostrarEstadoHabitaciones();

	
?>