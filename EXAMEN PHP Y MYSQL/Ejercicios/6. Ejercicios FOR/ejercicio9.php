<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio6</title>
</head>
<body>
	<?php 
	$n=rand(0,100);
	$resultado;
	
	for($i=0;$i<=10;$i++){
		$resultado=$n*$i;
		echo "$n x $i = $resultado<br>";
	}

	 ?>
</body>
</html>