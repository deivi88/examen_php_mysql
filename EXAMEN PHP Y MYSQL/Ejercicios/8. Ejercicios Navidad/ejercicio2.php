<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio2</title>
</head>
<body>
	<?php 
		$n1 = mt_rand(1,5);
		switch ($n1){
			case 1:
				echo '"Hola, buenos días"';
				break;
			case 2:
				echo '"Qué tal estas?"';
				break;
			case 3:
				echo "Hora de cerrar";
				break;
			case 4:
				echo "Me voy ya";
				break;
			case 5:
				echo "Adiós";
				break;
		}
	 ?>
</body>
</html>