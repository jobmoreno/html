<?php 
include('Conexion.php');

//Nueva instancia de Conexion
$c = new Conexion();

//Recibe Formulario
if (!empty($_POST['nombre']) && !empty($_POST['prioridad'])) {
	$nombre = $_POST['nombre'];
	$prioridad = $_POST['prioridad'];

	//Inserta Registro
	$c->insertar($nombre, $prioridad);
}
header('Location: tareaCreate.php');

 ?>