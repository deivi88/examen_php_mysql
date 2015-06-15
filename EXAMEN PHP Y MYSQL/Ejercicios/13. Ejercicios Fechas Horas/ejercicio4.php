<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 4 - Tema 8</title>

	<style>

		* {
			text-align: center;
			font-family: 'Open Sans', sans-serif;
			background: #14CC2F;
			color: white;
		}

		table {
			width: 400px;
			margin: 0 auto;
		}

		td {
			width: 200px;
			height: 30px;
			box-shadow: 0 0 5px black;
			padding: 5px 0;
			background: #40FF91;
		}

		input {
			background: #fff;
			color:black;
		}

	</style>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
<body>

	<h1>¿Cuando tienes que entregar el libro?</h1>

	<form action="#" method="post" name="fecha">
		
		<table>
			
			<tr>
				
				<td><input type="date" name="fecha_entrega"></td>
				<td><input type="submit" name="enviar_fecha" value="Enviar"></td>

			</tr>

		</table>

	</form>


	<?php

		if(isset($_POST['enviar_fecha']))
		{

			$fecha = $_POST['fecha_entrega'];
			$marca_fecha = strtotime($fecha);

			$hoy = date('Y-m-d');
			$marca_hoy = strtotime($hoy);

			if($marca_fecha>$marca_hoy)
			{
				$diferencia1 = $marca_fecha - $marca_hoy;
				$dias1 = date('d', $diferencia1)-1;
				echo "<br><br>Tranquilo. Aún te quedan $dias1 días de préstamo.";
			}
			elseif($marca_hoy==$marca_fecha)
			{
				echo "<br><br>Hoy era el día de entrega, perfecto.";
			}
			elseif($marca_hoy>$marca_fecha)
			{
				$diferencia2 = $marca_hoy - $marca_fecha;
				$dias2 = date('d', $diferencia2)-1;
				$multa = 3 * $dias2;
				echo "<br><br>Lo siento, te has pasado $dias2 días. Multa de $multa €.";
			}

		}

	?>
	
</body>
</html>