<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio6</title>
</head>
<body>
	<?php 

	$letra = array();
	

	for($i=0;$i<5;$i++){
		$letra[$i] = strtoupper(chr(rand(ord('a'),ord('z'))));
		echo "Posicion[$i] = $letra[$i]<br>";
	}
	 ?>
</body>
</html>