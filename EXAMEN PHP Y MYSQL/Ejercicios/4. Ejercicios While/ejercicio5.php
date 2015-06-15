<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php 
		$v = array(-5,6,-4,-3,8);
		$posi=0;
		$suma=0;
		while($posi<=4){
			$suma = $suma + $v[$posi];
			$posi++;
			
		}
		echo $suma;

		
		

	 ?>
</body>
</html>