<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>
	<?php 
		function miTabla($numero){
			for($multiplicador=0;$multiplicador<=10;$multiplicador++){
				echo $numero." x ".$multiplicador." = ".$numero*$multiplicador."<br>";
			}
		}

		miTabla(5);

	?>
</body>
</html>