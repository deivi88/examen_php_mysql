<html>
<head>
	<title> Ejercicio 3 </title>
</head>
<body>
	<?php
		//primero compruebo que haya algún dato en el campo n
		if($_POST['n'])
		{
			$n= $_POST['n'];
			
			echo "<table border>";
			for($i=0; $i<=10; $i++)
			{
				$resultado = $i * $n;
				echo "<tr> <td> $n x $i </td><td>$resultado</td></tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "No has introducido numero";
		}
	
	?>
</body>
</html>