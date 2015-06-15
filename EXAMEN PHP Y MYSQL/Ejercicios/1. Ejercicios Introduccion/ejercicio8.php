<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		$m[0][0]=5;
		$m[0][1]=60;
		$m[0][2]=19;
		$m[0][3]=4;
		$m[1][0]=18;
		$m[1][1]=14;
		$m[1][2]=17;
		$m[1][3]=2;
		$m[2][0]=119;
		$m[2][1]=7;
		$m[2][2]=12;
		$m[2][3]=0;
		$m[3][0]=8;
		$m[3][1]=3;
		$m[3][2]=1;
		$m[3][3]=4;
		$m[4][0]=20;
		$m[4][1]=7;
		$m[4][2]=9;
		$m[4][3]=5;
		

		//Seleccionamos las coordenadas $m[1][1] y $m[2][1]
		$suma = $m[1][1] + $m[2][1];
		$resta = $m[1][1] - $m[2][1];
		$producto = $m[1][1] * $m[2][1];
		$division = $m[1][1] / $m[2][1];
		echo 	"<table>
					<tr>
						<td>Valor 1</td>
						<td>";
		echo			$m[1][1];
		echo 			"</td>
					</tr>
					<tr>
						<td>Valor 2</td>
						<td>";
		echo			$m[2][1];
		echo 			"</td>
					</tr>
					<tr>
						<td>Suma</td>
						<td>$suma</td>
					</tr>
					<tr>
						<td>Resta</td>
						<td>$resta</td>
					</tr>
					<tr>
						<td>Producto</td>
						<td>$producto</td>
					</tr>
					<tr>
						<td>División</td>
						<td>$division</td>
					</tr>
				</table>";
	?>
</body>
</html>