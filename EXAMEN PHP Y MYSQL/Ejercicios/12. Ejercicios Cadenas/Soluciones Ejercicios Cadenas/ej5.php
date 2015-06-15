<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 5</title>
</head>
<body>

	<form action="#" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="text" name="frase1">
	<br>
	<input type="text" name="frase2">
	<br>
	<input type="text" name="frase3">
	<br>
	<input type="submit" name="enviar">

	</form>

	<?php 
	$frase1 = $_POST['frase1'];
	$frase2 = $_POST['frase2'];
	$frase3 = $_POST['frase3'];

	echo "<br>Frase 1 Original: $frase1 <br>";
	$frase12 = str_replace('a', 'A', $frase1);
	$frase13 = str_replace('b', 'v', $frase12);
	echo "Frase 1 Modificada = $frase13<br>";

	echo "<br>Frase 2 Original: $frase2 <br>";
	$frase22 = str_replace('a', 'A', $frase2);
	$frase23 = str_replace('b', 'v', $frase22);
	echo "Frase 2 Modificada = $frase23<br>";

	echo "<br>Frase 3 Original: $frase3 <br>";
	$frase32 = str_replace('a', 'A', $frase3);
	$frase33 = str_replace('b', 'v', $frase32);
	echo "Frase 3 Modificada = $frase33";


	 ?>
</body>
</html>