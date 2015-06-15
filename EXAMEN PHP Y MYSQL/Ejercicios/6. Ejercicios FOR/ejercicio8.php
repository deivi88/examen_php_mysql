<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio6</title>
</head>
<body>
	<?php 
	$v=array();
	$resultado=0;



	$resultado = 0;
	for($i=0;$i<10;$i++){
		$v[$i]=rand(-10,10);
		$resultado=$resultado+$v[$i];

	}
	echo $resultado;


	 ?>
</body>
</html>