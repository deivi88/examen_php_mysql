<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php 
		for($i=0; $i<15; $i++)
			$v[$i] = mt_rand(1,1000);
		
		echo 	"<table border 1>";
		echo 	"<tr>
					<th>Vector original</th>
					<th>";
		$i=0;
			while($i<((count($v))-1)){
				echo "$v[$i]-";
				$i++;
			}
			echo "$v[$i]";
		
		echo 		"</th>";
		echo 	"</tr>";
		$v2 = $v;
		echo 	"<tr>
					<td>Mayor</td>
					<td>";
				rsort($v2);
				echo "$v2[0]</td>";
		echo	"</tr>";
		echo 	"<tr>
					<td>Menor</td>
					<td>";
				sort($v2);
				echo "$v2[0]</td>";
		echo	"</tr>";
		echo 	"<tr>
					<td>Vector inverso</td>";
		echo 		"<td>";
				$v3 = array_reverse($v);
				for($i=0; $i<count($v3)-1; $i++){
					echo "$v3[$i]-";
				}
				echo "$v3[$i]";				
		echo 		"</td>";
		echo 	"<tr>
					<td>Vector ordenado</td>";
		echo 		"<td>";
				for($i=0; $i<count($v2)-1; $i++){
					echo "$v2[$i]-";
				}
				echo "$v2[$i]";
		echo		"</td>";
		echo 	"<tr>
					<td>Vector solo pares</td>";
		echo 		"<td>";
				for($i=0; $i<count($v); $i++){
					if($v[$i]%2==0){
						echo "$v[$i]-";
					}
				}
		echo 		"</td>";
		echo 	"<tr>
					<td>Vector solo impares</td>";
		echo 		"<td>";
				for($i=0; $i<count($v); $i++){
					if($v[$i]%2!=0){
						echo "$v[$i]-";
					}
				}
		echo		"</td>";
		echo "</table>";


	 ?>
</body>
</html>