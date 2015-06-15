<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio2</title>
</head>
<body>
	<?php 
	$v = array();
	$contador=0;
	for($i=0;$i<15;$i++){
		$v[$i]=rand(0,100);
		

		if($v[$i]%2==0){
			echo "$v[$i]<br>";
		}
		else{
			$contador++;
		}

	}
	echo "Hay $contador números impares";


	 ?>
</body>
</html>