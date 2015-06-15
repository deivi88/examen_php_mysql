<html>
<head>
	<title> Ejercicio 10 </title>
</head>
<body>
	<?php
		//No hace falta comprobar los datos porque están preseleccionados 
		$n = $_POST['num'];
		$color = $_POST['color'];
		echo "<table border bgcolor='$color'>";
			for($i=0; $i<=10; $i++)
			{
				$resultado = $i * $n;
				echo "<tr> <td> $n x $i </td><td>$resultado</td></tr>";
			}
			echo "</table>";
		
	?>
</body>
</html>