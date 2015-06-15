<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio5</title>
</head>
<body>
	<?php 
		$m=array();
		$contador=0;
		echo "<table border=1>";
		for($i=0; $i<3; $i++){
			echo "<tr>";
			for($j=0; $j<5; $j++){
				$m[$i][$j]=mt_rand(-100,100);
				echo "<td>".$m[$i][$j]."</td>";
				if($m[$i][$j]<0){
					$contador++;
				}
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "<br>Hay $contador numeros negativos.";
	 ?>
</body>
</html>