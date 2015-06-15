<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio3</title>
</head>
<body>
	<?php 
	$v = array();
	for($i=0;$i<10;$i++){
		$v[$i]=rand(0,100);
		echo "Posicion[$i]: $v[$i]<br>";
		
	}

	echo "<br>";
	for($i=0;$i<10;$i++){
		if($i%2==0){
		echo "Posicion[$i]: $v[$i]<br>";
		}


	}
	
		




	 ?>
</body>
</html>