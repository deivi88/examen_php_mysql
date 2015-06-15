<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>
	<?php 
		$n=10;

		if($n<-10){
			echo '$n es menor que -10';
		}elseif($n>=-10 && $n<=-1){
			echo '$n está entre -10 y -1';
		}elseif($n==0){
			echo '$n es 0';
		}
		elseif($n>=1 && $n<=10){
			echo '$n está entre 1 y 10';
		}
		else{
			echo '$n es mayor que 10';
		}

		


	 ?>
</body>
</html>