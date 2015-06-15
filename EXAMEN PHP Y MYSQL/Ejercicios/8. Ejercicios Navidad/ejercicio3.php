<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio3</title>
</head>
<body>
	<?php 
		$v = array();
		$contador = 0;
		for($i=0; $i<50; $i++){
			$v[$i] = mt_rand(0,20);
			echo "$v[$i] &nbsp;";
			if($v[$i] == 8){
				$contador++;
			}
		}
		if($contador == 1){
			echo "<br>El número 8 se repite $contador vez";
		}
		else{
			echo "<br>El número 8 se repite $contador veces";
		}		
	 ?>
</body>
</html>