<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>
	<?php 
		$ciudad = array('Granada'=>150000, 'Madrid'=>3000000, 'Barcelona'=>2879200, 'Malaga'=>240000, 'Sevilla'=>50000, 'Valencia'=>1584600, 'Tarragona'=>485210);
		echo 	"<table>
				<tr>
					<td>Ciudad</td>
					<td>Población</td>
				</tr>";
				foreach ($ciudad as $c => $p) {
					echo "<tr>
							<td>$c</td>
							<td>$p</td>
							</tr>";
				}
		echo 	"</table>";

		/*a. Mostrar después el array asociativo:
		i. Ordenado por orden alfabético de ciudad.
		ii. Ordenado por cantidad de población*/

		$ciudad2 = $ciudad;

		ksort($ciudad2);
		echo 	"<table>
				<tr>
					<td>Ciudad</td>
					<td>Población</td>
				</tr>";
				foreach ($ciudad2 as $c => $p) {
					echo "<tr>
							<td>$c</td>
							<td>$p</td>
							</tr>";
				}
		echo 	"</table>";

		asort($ciudad2);

		echo 	"<table>
				<tr>
					<td>Ciudad</td>
					<td>Población</td>
				</tr>";
				foreach ($ciudad2 as $c => $p) {
					echo "<tr>
							<td>$c</td>
							<td>$p</td>
							</tr>";
				}
		echo 	"</table>";

		/*b. Mostrar una tabla sólo con la ciudad con más población y la ciudad con menos
		población.*/

		arsort($ciudad2);
		$ciudades_max = array_keys($ciudad2);
		$poblacion_max = array_values($ciudad2);
		asort($ciudad2);
		$ciudades_min = array_keys($ciudad2);
		$poblacion_min = array_values($ciudad2);
		echo 	"<table>
				<tr>
					<td>Ciudad</td>
					<td>Población</td>
				</tr>
				<tr>
					<td>$ciudades_max[0]</td>
					<td>$poblacion_max[0]</td>
				</tr>
				<tr>
					<td>$ciudades_min[0]</td>
					<td>$poblacion_min[0]</td>
				</tr>
				</table>";
	 ?>
</body>
</html>