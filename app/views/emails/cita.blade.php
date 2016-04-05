<!DOCTYPE html>

<?php
	$nombre = Input::get('nombre');
	$telefono = Input::get('telefono');
	$fecha = Input::get('fecha'); 
	$hora = Input::get('hora');  
	$comentarios = Input::get('comentarios');  
?>


<html lang="es-MX">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Contacto de <?php echo $nombre; ?></h2>
		

		<div>
			Telefono: <?php echo $telefono; ?>
		</div>

		<div>
			Requiere cita para el dia: <?php echo $fecha . ' a las' . $hora ?>
		</div>

		<br>

		<div style="text-align:center;padding:3em;">
			<?php echo $comentarios; ?>
		</div>
		
		<br>

		<div style="text-align:center;padding:3em; border:1px solid red;">
			Nota: este es un usario proveniente del sitio www.medicavial.com favor de tomar prioridad ya que es una cita
		</div>
	</body>
</html>