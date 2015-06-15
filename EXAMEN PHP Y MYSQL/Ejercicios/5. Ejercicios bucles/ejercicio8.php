<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 8</title>
</head>
<body>
	<?php 
	//Con WHILE
		/*$v=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
		$i=0;
		$sumapar=0;
		$sumaimpar=0;
		while($i<30){
			if($v[$i]%2==0){
				$sumapar=$sumapar + $v[$i];
				$i++;
			}
			else{
				$sumaimpar=$sumaimpar + $v[$i];
				$i++;
			}
		}
		echo "La suma de los números pares es: $sumapar<br>";
		echo "La suma de los números impares es: $sumaimpar";*/
		

	//Con DO WHILE
		/*$v=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
		$i=0;
		$sumapar=0;
		$sumaimpar=0;
		do{
			if($v[$i]%2==0){
				$sumapar=$sumapar + $v[$i];
				$i++;
			}
			else{
				$sumaimpar=$sumaimpar + $v[$i];
				$i++;
			}
		}while($i<30);
		echo "La suma de los números pares es: $sumapar<br>";
		echo "La suma de los números impares es: $sumaimpar";*/

	//Con FOR
		/*$v=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
		$sumapar=0;
		$sumaimpar=0;
		for($i=0; $i<30; $i++){
			if($v[$i]%2==0){
				$sumapar=$sumapar + $v[$i];
			}
			else{
				$sumaimpar=$sumaimpar + $v[$i];
			}
		}
		echo "La suma de los números pares es: $sumapar<br>";
		echo "La suma de los números impares es: $sumaimpar";*/
	 ?>
</body>
</html>