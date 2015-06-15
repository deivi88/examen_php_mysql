<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3 - Tema 8</title>
</head>
<body>

	
	<?php

		if(isset($_POST['enviar_fecha']))
		{

			$fecha = $_POST['fecha'];
			$hoy = date('Y-m-d');

			$marca_fecha = strtotime($fecha);
			$marca_hoy = strtotime($hoy);

			if($marca_hoy>=$marca_fecha)
			{
				$pasados = $marca_hoy - $marca_fecha;

				$dias = date('d', $pasados)-1;
				$meses = date('n', $pasados)-1;
				$anios = date('Y', $pasados)-1970;

				$dias_hoy = date('d');
				$meses_hoy = date('n');
				$anios_hoy = date('Y');

				$dias_fecha = date('d', $marca_fecha);
				$meses_fecha = date('n', $marca_fecha);
				$anios_fecha = date('Y', $marca_fecha);

				echo "Nacistes el $fecha. Tienes $anios años, $meses meses y $dias días";
				echo "<br><br>";

				if($anios>=18)
				{
					if($meses_fecha==$meses_hoy && $dias_fecha==$dias_hoy)
					{
						if($anios==18)
						{
							echo "FELICIDADES, HOY ES TU CUMPLEAÑOS! Y ACABAS DE CUMPLIR LA MAYORÍA DE EDAD!<br><br>";
						}
						else
						{
							echo "FELICIDADES, HOY ES TU CUMPLEAÑOS! Y ya cumpliste la mayoría de edad!<br><br>";
						}
					}
					else
					{
						echo "YA ERES MAYOR DE EDAD!<br><br>";
					}
				}
				else
				{
					if($meses_fecha==$meses_hoy && $dias_fecha==$dias_hoy)
					{
						echo "FELICIDADES, HOY ES TU CUMPLEAÑOS! Pero NO eres mayor de edad!<br><br>";
					}
					else
					{
						echo "NO eres mayor de edad!<br><br>";
					}
				}

			}
			else
			{
				echo "Upps! Creo que aún no has nacido... :(<br><br>";
			}

		}

	?>

	<form action="#" method="post" name="fecha">
		
		<input type="date" name="fecha">
		<input type="submit" name="enviar_fecha" value="Enviar">

	</form>
	
</body>
</html>