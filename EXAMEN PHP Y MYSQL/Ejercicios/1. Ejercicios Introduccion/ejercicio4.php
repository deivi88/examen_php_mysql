<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3</title>
</head>
<body>
	<?php
		define("PI", 3.14);
		$radius=5;
		$perimeter=2*PI*$radius;
		$area=PI*$radius*$radius; 
		echo 	"<ul>
					<li><b>Radio</b>: "."<span style=color:#00B0F0;>"."$radius"."</span></li>
					<li><b>Perímetro</b>: "."<span style=color:#00B0F0;>"."$perimeter"."</span></li>
					<li><b>Superficie</b>: "."<span style=color:#00B0F0;>"."$area"."</span></li>
				</ul>";
	?>
</body>
</html>