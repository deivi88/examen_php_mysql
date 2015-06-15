<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>
	<?php 
	//Con WHILE
		/*$v=array(1,2,3,4,5,6,7,8,9,10);
		$vimpar= array();
		$i=0;
		while($i<10){
			if($v[$i]%2==0){
				echo "Posición [$i]: $v[$i]<br>";	
			}
			$i++;
		}
		$i=0;
		while($i<10){
			if($v[$i]%2!=0){
				echo "Posición [$i]: $v[$i]<br>";	
			}
			$i++;
		}*/

	//Con DO WHILE
		/*$v=array(1,2,3,4,5,6,7,8,9,10);
		$i=0;
		do{
			if($v[$i]%2==0){
				echo "Posición [$i]: $v[$i]<br>";	
			}
			$i++;
		}while($i<10);
		$i=0;
		do{
			if($v[$i]%2!=0){
				echo "Posición [$i]: $v[$i]<br>";	
			}
			$i++;
		}while($i<10);*/

	//Con FOR
		$v=array(1,2,3,4,5,6,7,8,9,10);
		for($i=0; $i<10; $i++){
			if($v[$i]%2==0){
				echo "Posición [$i]: $v[$i]<br>";	
			}
		}
		for($i=0; $i<10; $i++){
			if($v[$i]%2!=0){
				echo "Posición [$i]: $v[$i]<br>";	
			}
		}

	 ?>
</body>
</html>