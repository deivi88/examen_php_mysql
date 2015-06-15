<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 5</title>
</head>
<body>
	<?php 
		$nota1=7;
		$nota2=5;
		$nota3=6;
		$notamedia=($nota1+$nota2+$nota3)/3;


		if($notamedia<5){
			echo "$notamedia"." - ALUMNO SUSPENSO";
		}elseif($notamedia>=5 && $notamedia<7){
			echo "$notamedia"." - APROBADO";
		}
		elseif($notamedia>=7 && $notamedia<8.5){
			echo "$notamedia"." - NOTABLE";
		}
		elseif($notamedia>=8.5 && $notamedia<=10){
			echo "$notamedia"." - SOBRESALIENTE";
		}
		


	 ?>
</body>
</html>