<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio5</title>
</head>
<body>
	<?php
	$name=array("Juan","Maria","Andrés");
	$weight=array(89,78,60);
	$height=array(1.77,1.68,1.57);
	
	$imc=array(($weight[0]/($height[0]*$height[0])),($weight[1]/($height[1]*$height[1])),($weight[2]/($height[2]*$height[2])));
	echo 	"<ul>
				<li><b>Nombre: </b>"."<font color='#ff0023'>"."$name[0]"."</font></li>
					<ul>
						<li><u>Peso</u>: "."$weight[0]"."</li>
						<li><u>Altura</u>: "."$height[0]"."</li>
						<li><u>IMC</u>: "."$imc[0]"."</li>
					</ul>
				<li><b>Nombre: </b>"."<font color='#7030a0'>"."$name[1]"."</font></li>
					<ul>
						<li><u>Peso</u>: "."$weight[1]"."</li>
						<li><u>Altura</u>: "."$height[1]"."</li>
						<li><u>IMC</u>: "."$imc[1]"."</li>
					</ul>

				<li><b>Nombre: </b>"."<font color='#5ebf7b'>"."$name[2]"."</font></li>
					<ul>
						<li><u>Peso</u>: "."$weight[2]"."</li>
						<li><u>Altura</u>: "."$height[2]"."</li>
						<li><u>IMC</u>: "."$imc[2]"."</li>
					</ul>
			</ul>";
	?>
</body>
</html>