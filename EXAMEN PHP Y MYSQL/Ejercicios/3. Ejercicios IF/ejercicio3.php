<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3</title>
</head>
<body>
	<?php 
		$n1=30;
		$n2=50;
		$n3=60;

		if($n1<$n2 && $n1<$n3){
			echo "$n1 es el menor";
		}elseif($n2<$n1 && $n2<$n3){
			echo "$n2 es el menor";
		}else{
			echo "$n3 es el menor";
		}

		


	 ?>
</body>
</html>