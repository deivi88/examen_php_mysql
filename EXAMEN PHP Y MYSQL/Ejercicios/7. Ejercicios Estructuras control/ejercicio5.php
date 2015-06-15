<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php 
		$vehiculo="coche";

		switch ($vehiculo) {
			case "bicicleta":
				echo 	"La bicicleta tiene 2 ruedas.";
				break;
			case "triciclo":
				echo 	"El triciclo tiene 3 ruedas.";
				break;
			case "coche":
				echo 	"El coche tiene 4 ruedas.";
				break;
			default:
				echo "No es un valor válido.";
				break;
		}


	 ?>
</body>
</html>