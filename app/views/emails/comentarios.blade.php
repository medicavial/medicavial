<!DOCTYPE html>

<?php
	$nombres = Input::get('nombres');
	$apellidos = Input::get('apellidos');
	$telefono = Input::get('telefono');
	$comentarios = Input::get('comentarios');  
?>


<html lang="es-MX">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Contacto de <?php echo $nombres; ?>  <?php echo $apellidos; ?> </h2>
		

		<div>
			Telefono:<?php echo $telefono; ?> 
		</div>

		<br>

		<div style="text-align:center;padding:3em;">
			<?php echo $comentarios; ?> 
		</div>
		
		<br>

		<div style="text-align:center;padding:3em; border:1px solid red;">
			Nota: este es un usario proveniente del sitio www.medicavial.com favor de tomar prioridad
		</div>
	</body>
</html>