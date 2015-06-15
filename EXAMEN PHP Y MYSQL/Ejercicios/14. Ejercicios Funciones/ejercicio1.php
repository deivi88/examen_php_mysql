<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio1</title>
</head>
<body>
	<?php 
		
		function corregir_primera_letra($cad){
			$cadena2 = ucfirst($cad);
			echo $cadena2;
		}
		$cadena = $_POST["cadena"];
		corregir_primera_letra($cadena);
	 ?>
</body>
</html>