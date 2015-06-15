<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2 - Tema 8</title>
</head>
<body>

	<?php

		if(isset($_POST['enviar_fechas']))
		{

			$fecha1 = $_POST['fecha1'];
			$fecha2 = $_POST['fecha2'];

			$marca_fecha1 = strtotime($fecha1);
			$marca_fecha2 = strtotime($fecha2);

			if($marca_fecha1>$marca_fecha2)
			{
				$pasados1 = $marca_fecha1 - $marca_fecha2;
				$dias1 = date('d', $pasados1)-1;
				$meses1 = date('n', $pasados1)-1;
				$anios1 = date('Y', $pasados1)-1970;

				echo "Entre $fecha2 y $fecha1, han pasado $anios1 años, $meses1 meses y $dias1 días<br><br>"; 
			}
			else
			{
				$pasados2 = $marca_fecha2 - $marca_fecha1;
				$dias2 = date('d', $pasados2)-1;
				$meses2 = date('n', $pasados2)-1;
				$anios2 = date('Y', $pasados2)-1970;

				echo "Entre $fecha1 y $fecha2, han pasado $anios2 años, $meses2 meses y $dias2 días<br><br>";
			}

		}

	?>

	<form action="#" method="post" name="fechas">
		
		<input type="date" name="fecha1">
		<input type="date" name="fecha2">
		<input type="submit" name="enviar_fechas" value="Enviar">

	</form>
	
</body>
</html>