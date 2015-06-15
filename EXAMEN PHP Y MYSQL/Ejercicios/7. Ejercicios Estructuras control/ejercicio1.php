<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php 
		$letra="o";
		switch ($letra) {
			case "a":
			case "e":
			case "i":
			case "o":
			case "u":
				echo "Es una vocal.";
				break;
			
			default:
				echo "No es una vocal.";
				break;
		}


	 ?>
</body>
</html>