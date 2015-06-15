<html>
<head>
	<title> Ejercicio 6 </title>
</head>
<body>
	<?php
		//primero compruebo que haya introducido 3 numeros
		if($_POST['n1'] && $_POST['n2'] )
		{
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			
			echo "<table border>";
			echo "<tr><td> Numeros entre $n1 y $n2 </td></tr>";
			if($n1<$n2)
			{
				for($n1; $n1<=$n2; $n1++)
				{
					echo "<tr><td> $n1 </td></tr>";
				}
			
			}
			else
			{
				for($n1; $n1>=$n2; $n1--)
				{
					echo "<tr><td> $n1 </td></tr>";
				}
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