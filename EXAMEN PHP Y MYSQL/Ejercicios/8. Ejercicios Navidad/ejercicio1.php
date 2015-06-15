<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio1</title>
	<style type="text/css">
		table{
			border: 2px solid #000;
			color: white;
			font-family: arial;
			font-size: 14px;
		}
		
		td{
			border: 1px solid #000;
			background: #C0504D;
		}
	</style>
</head>
<body>
	<?php 
		$n1 = mt_rand(0,100);
		$n2 = mt_rand(0,100);
		$suma = $n1 + $n2;
		$resta = $n1 - $n2;
		$multi = $n1 * $n2;
		if($n1 == 0 && $n2 == 0){
			$division = "Es una indeterminación";
		}
		elseif($n1 !=0 && $n2 == 0){
			$division = "Es una indefinición";
		}
		else{
			$division = $n1 / $n2;
		}
		
		echo "<table>
				<tr>
					<td>Numero 1</td>
					<td>$n1</td>
				</tr>
				<tr>
					<td>Numero 2</td>
					<td>$n2</td>
				</tr>
				<tr>
					<td>Numeros entre $n1 y $n2</td>
					<td>";
		
		if($n1<=$n2){
			for($i=$n1; $i<=$n2; $i++){
				echo "$i &nbsp;";
			}
		}
		else{
			for($i=$n1; $i>=$n2; $i--){
				echo "$i &nbsp;";
			}
		}			
		echo		"</td>
				</tr>
				<tr>
					<td>$n1 + $n2</td>
					<td>$suma</td>
				</tr>
				<tr>
					<td>$n1 - $n2</td>
					<td>$resta</td>
				</tr>
				<tr>
					<td>$n1 * $n2</td>
					<td>$multi</td>
				</tr>
				<tr>
					<td>$n1 / $n2</td>
					<td>$division</td>
				</tr>
			</table>";
	 ?>
</body>
</html>