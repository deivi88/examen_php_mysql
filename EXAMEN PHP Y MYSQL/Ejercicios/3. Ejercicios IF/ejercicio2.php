<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>
	<?php 
		$n=108;

		if($n<0){
			echo "$n es menor que 0";
		}elseif($n>0 && $n<100){
			echo "$n está entre 0 y 100";
		}else{
			echo "$n es mayor que 100";
		}

		


	 ?>
</body>
</html>