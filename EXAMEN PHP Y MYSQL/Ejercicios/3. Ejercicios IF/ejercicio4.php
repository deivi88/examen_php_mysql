<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 4</title>
</head>
<body>
	<?php 
		$nota=7.5;

		if($nota<5){
			echo "ALUMNO SUSPENSO";
		}elseif($nota>=5 && $nota<7){
			echo "APROBADO";
		}
		elseif($nota>=7 && $nota<8.5){
			echo "NOTABLE";
		}
		elseif($nota>=8.5 && $nota<=10){
			echo "SOBRESALIENTE";
		}
		


	 ?>
</body>
</html>