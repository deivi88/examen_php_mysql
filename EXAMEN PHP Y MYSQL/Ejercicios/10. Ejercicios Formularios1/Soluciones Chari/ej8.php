<html>
<head>
	<title> Ejercicio 8 </title>
</head>
<body>
	<?php
		//No hace falta comprobar los datos porque están preseleccionados los 0
		$nom = $_POST['nom'];
		$mate = $_POST['mat'];
		$leng = $_POST['len'];
		$hist = $_POST['his'];
		$dibu = $_POST['dib'];
		
		//compruebo los posibles valores para histmaticas
		if($mate < 5)
		{
			$nota_mate='Insuficiente';
		}
		elseif($mate==5)
		{
			$nota_mate='Suficiente';
		}
		elseif($mate==6)
		{
			$nota_mate='Bien';
		}
		elseif($mate==7 or $mate==8)
		{
			$nota_mate='Notable';
		}
		else
		{
			$nota_mate='Sobresaliente';
		}
		
		//compruebo los posibles valores para lengua
		if($leng < 5)
		{
			$nota_leng='Insuficiente';
		}
		elseif($leng==5)
		{
			$nota_leng='Suficiente';
		}
		elseif($leng==6)
		{
			$nota_leng='Bien';
		}
		elseif($leng==7 or $leng==8)
		{
			$nota_leng='Notable';
		}
		else
		{
			$nota_leng='Sobresaliente';
		}
		
		//compruebo los posibles valores para historia
		if($hist < 5)
		{
			$nota_hist='Insuficiente';
		}
		elseif($hist==5)
		{
			$nota_hist='Suficiente';
		}
		elseif($hist==6)
		{
			$nota_hist='Bien';
		}
		elseif($hist==7 or $hist==8)
		{
			$nota_hist='Notable';
		}
		else
		{
			$nota_hist='Sobresaliente';
		}
		
		//compruebo los posibles valores para dibujo
		if($dibu < 5)
		{
			$nota_dibu='Insuficiente';
		}
		elseif($dibu==5)
		{
			$nota_dibu='Suficiente';
		}
		elseif($dibu==6)
		{
			$nota_dibu='Bien';
		}
		elseif($dibu==7 or $dibu==8)
		{
			$nota_dibu='Notable';
		}
		else
		{
			$nota_dibu='Sobresaliente';
		}
		
		//Muestro el boletin de notas
		echo "<table border> <tr><td> Alumno </td> <td> $nom </td></tr>";
		echo "<tr><td> Matematicas </td> <td> $nota_mate </td></tr>";
		echo "<tr><td> Lengua </td> <td> $nota_leng </td></tr>";
		echo "<tr><td> Historia </td> <td> $nota_hist </td></tr>";
		echo "<tr><td> Dibujo </td> <td> $nota_dibu </td></tr></table>";
	?>
</body>
</html>