<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio2</title>
</head>
<body>
	<?php 
		
		function corregir_mayusculas($cad){
			$cadenaminusculas = strtolower($cad);
			$cadena2 = ucfirst($cadenaminusculas);
			echo $cadena2;
		}
		$cadena = $_POST["cadena"];
		corregir_mayusculas($cadena);
	 ?>
</body>
</html>