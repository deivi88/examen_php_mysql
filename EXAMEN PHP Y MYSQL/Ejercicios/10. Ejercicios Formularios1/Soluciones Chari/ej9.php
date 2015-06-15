<html>
<head>
	<title> Ejercicio 6 </title>
</head>
<body>
	<?php
		//primero compruebo que haya introducido 4 numeros
		if($_POST['n1'] && $_POST['n2']&& $_POST['n3']&& $_POST['n4'] )
		{
			//creo un array con los 4 números para poder agilizar las cosas
			$n = array ($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4']);
			
			
			echo "<table border>";
			echo "<tr><td> Numero </td> <td> Cuadrado </td> <td> Cubo </td></tr>";
			for($i=0; $i<4; $i++)
			{
				$cuadrado=$n[$i]*$n[$i];
				$cubo = $cuadrado * $n[$i];
				echo "<tr><td> $n[$i] </td> <td> $cuadrado </td><td> $cubo </td></tr>";
			}
			echo "</table>";
			
			
		}
		else
		{
			echo "Falta algun numero por introducir";
		}
	
	?>
</body>
</html>