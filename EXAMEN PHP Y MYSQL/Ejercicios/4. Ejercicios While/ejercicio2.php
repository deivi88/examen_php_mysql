<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php 
		$i=32;
		while($i<=106){
			//Para sacar los números impares o pares tenemos que comparar siempre con un IF
			if($i%2!=0){
				echo "$i <br>";
				$i++;
			}
			else{
				$i++;
			}
		}

		
		

	 ?>
</body>
</html>