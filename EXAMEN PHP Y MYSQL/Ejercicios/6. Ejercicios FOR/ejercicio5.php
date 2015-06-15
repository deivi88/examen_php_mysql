<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio5</title>
</head>
<body>
	<?php 
	
	$n1=rand(0,10);
	$n2=rand(0,10);

	Echo "los numeros son $n1 y $n2 <br>";

	if($n1==$n2){
		echo "Los números son iguales";
	}
	elseif($n1>$n2){
		for($i=$n2;$i<=$n1;$i++){
			if($i%2!=0){
				echo "$i<br>";
			}
		}
	}else{
		for($i=$n1;$i<=$n2;$i++){
			if($i%2!=0){
				echo "$i<br>";
			}
		}
	}
		




	 ?>
</body>
</html>