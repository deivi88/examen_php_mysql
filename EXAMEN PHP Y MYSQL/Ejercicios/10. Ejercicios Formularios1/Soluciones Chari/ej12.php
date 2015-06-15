<html>
<head>
	<title> Ejercicio 12 </title>
</head>
<body>
	<?php
		//No hace falta comprobar los datos porque están preseleccionados 
		$fondo = $_POST['fondo'];
		$texto = $_POST['texto'];
		$fuente = $_POST['fuente'];
		
		echo "<form name='formulario10b' action='ej12b.php' method='post'>
			Nombre: <input type='text' name='nombre'><br>
			Edad: <input type='text' name='edad'><br>
			<input type='hidden' name='fondo' value='$fondo'>
			<input type='hidden' name='texto' value='$texto'>
			<input type='hidden' name='fuente' value='$fuente'>
			<input type='submit' name='enviar' value='generar mensaje'>
			</form>";
		
	?>
</body>
</html>