<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio4</title>
</head>
<body>
	<?php 
		$v = array();
		for($i=0; $i<100; $i++){
			$v[$i] = mt_rand(0,100);
			if($v[$i]%2==0){
				echo "$v[$i]&nbsp;";
			}
		}
	 ?>
</body>
</html>