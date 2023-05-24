<!DOCTYPE html>
<html>
<head>
	<title>Formulario de reserva de habitación</title>
</head>
<body>
	<h1>Formulario de reserva de habitación</h1>
	<form method="POST" action="procesar_formulario.php">
		<label for="num_personas">Número de personas:</label>
		<input type="number" id="num_personas" name="num_personas" min="1" max="4" required>
		<br><br>
		<label for="tipo_cama">Tipo de cama:</label>
		<input type="radio" id="tipo_cama_1" name="tipo_cama" value="1" required>
		<label for="tipo_cama_1">1 cama</label>
		<input type="radio" id="tipo_cama_2" name="tipo_cama" value="2" required>
		<label for="tipo_cama_2">2 camas</label>
		<br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>
