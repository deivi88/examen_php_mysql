<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		function contar_letra($cad, $l){
			$contador = substr_count($cad, $l);
			echo "La letra $l aparece $contador veces";
		}
		
		$cadena = $_POST["cadena"];
		$letra = $_POST["letra"];
		contar_letra($cadena, $letra);

	 ?>
</body>
</html>