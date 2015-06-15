<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 9</title>
</head>
<body>
	<?php 
	//Con FOR
		$v=array(1,2,3,4,5,6,7,8,9,10);
		for($i=0; $i<5; $i++){
			echo "Vector $i :<br>";
			for($j=0; $j<10; $j++){
				echo "Posición [$j]: $v[$j]<br>";
			}
		}
		
	 ?>
</body>
</html>