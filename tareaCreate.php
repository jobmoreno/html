<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'tareas.php';
	 ?>
	<title>Tareas</title>
</head>
<body>
<form action="tareaStore.php" method='POST'>
	<label>Nombre</label>
	<input type="text" name="nombre">
	<label>Prioridad</label>
	<select>
		<option>Baja</option>
		<option>Media</option>
		<option>Alta</option>
	</select>
</form>
</body>
</html>