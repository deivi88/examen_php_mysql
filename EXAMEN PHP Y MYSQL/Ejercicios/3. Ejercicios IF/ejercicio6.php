<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 5</title>
</head>
<body>
	<?php 
		$letra="S";
		if($letra=="L" || $letra=="M" || $letra=="X"  || $letra=="J"  || $letra=="V"){
			echo "El día elegido es entre semana";
		}elseif($letra=="S" || $letra=="D"){
			echo "El día elegido es fin de semana";
		}
		else{
			echo "El día elegido no es válido";
		}
		


	 ?>
</body>
</html>