<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1 - Tema 8</title>
</head>
<body>

	<?php

		if(isset($_POST['enviar_fecha']))
		{
			$dia = $_POST['fecha_dia'];
			$mes = $_POST['fecha_mes'];
			$anio = $_POST['fecha_anio'];

			$fecha_enviada = strtotime("$anio-$mes-$dia"); //OBTENEMOS LA MARCA DE TIEMPO DE LA FECHA MANDADA POR EL USUARIO
			$dia_semana = date('l', $fecha_enviada); //CON DATE L (MINUSCULA) Y LA MARCA DE TIEMPO, OBTENEMOS QUE DÍA DE LA SEMANA FUE ESA MARCA DE TIEMPO

			echo "El día $dia/$mes/$anio fue $dia_semana<br><br>";
		}

	?>

	<form action="#" method="post" name="elegir_fecha">
		
		Día: <select name="fecha_dia">
			
			<?php

				for($i=1;$i<=31;$i++)
				{
					echo "<option value='$i'>$i</option>";
				}

			?>

		</select>

		Mes: <select name="fecha_mes">
			
			<?php

				for($i=1;$i<=12;$i++)
				{
					echo "<option value='$i'>$i</option>";
				}

			?>

		</select>

		Año: <select name="fecha_anio">
			
			<?php

				for($i=2015;$i>=1910;$i--)
				{
					echo "<option value='$i'>$i</option>";
				}

			?>

		</select>

		<input type="submit" name="enviar_fecha" value="Enviar">

	</form>
	
</body>
</html>