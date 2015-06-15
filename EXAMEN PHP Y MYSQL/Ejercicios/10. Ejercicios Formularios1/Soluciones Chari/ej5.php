<html>
<head>
	<title> Ejercicio 5 </title>
</head>
<body>
	<?php
		//primero compruebo que haya introducido 3 numeros
		if($_POST['n1'] && $_POST['n2'] && $_POST['n3'] )
		{
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			$n3 = $_POST['n3'];
			
			echo "<table border>";
			echo "<tr> <td> Valor 1 </td><td> $n1 </td></tr>";
			echo "<tr> <td> Valor 2 </td><td> $n2 </td></tr>";
			echo "<tr> <td> Valor 3 </td><td> $n3 </td></tr>";
			$resul= $n1 + $n2;
			echo "<tr> <td> Valor 1  + Valor 2</td><td> $resul </td></tr>";
			$resul= $n2 * $n3;
			echo "<tr> <td> Valor 2  * Valor 3</td><td> $resul </td></tr>";
			$resul= $n1 / $n2;
			echo "<tr> <td> Valor 1  / Valor 2</td><td> $resul </td></tr>";
			$resul= $n1 + $n2 + $n3;
			echo "<tr> <td> Valor 1  + Valor 2 + Valor 3</td><td> $resul </td></tr>";
			$resul= ($n2 + $n3)/$n1;
			echo "<tr> <td> (Valor 2  + Valor 3) / Valor 1</td><td> $resul </td></tr>";
			
			
			echo "</table>";
			
			
		}
		else
		{
			echo "Falta algun numero por introducir";
		}
	
	?>
</body>
</html>