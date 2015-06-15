<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php 
		$days=30;

		switch ($days) {
			case 28:
				echo 	"Meses con 28 días:
						<ul>
							<li>Febrero</li>
						</ul>";

				break;
			case 30:
				echo 	"Meses con 30 días:
						<ul>
							<li>Abril</li>
							<li>Junio</li>
							<li>Septiembre</li>
							<li>Noviembre</li>
						</ul>";
				break;
			case 31:
				echo 	"Meses con 31 días:
						<ul>
							<li>Enero</li>
							<li>Marzo</li>
							<li>Mayo</li>
							<li>Julio</li>
							<li>Agosto</li>
							<li>Octubre</li>
							<li>Diciembre</li>
						</ul>";
				break;
			default:
				echo "No es un valor válido.";
				break;
		}


	 ?>
</body>
</html>