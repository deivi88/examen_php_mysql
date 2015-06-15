<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio6</title>
</head>
<body>
	<?php 
	$resultado;
	
	for($i=0;$i<=10;$i++){
		for($j=0;$j<=10;$j++){
			$resultado=$i*$j;
			echo "$i x $j = $resultado<br>";
		}
		echo "<br>";
	}

	 ?>
</body>
</html>