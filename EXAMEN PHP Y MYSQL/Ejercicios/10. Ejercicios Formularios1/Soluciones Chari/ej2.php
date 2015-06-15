<html>
<head>
	<title> Ejercicio 2 </title>
</head>
<body>
	<?php
		//primero compruebo que haya algún dato en el campo n
		if($_POST['n'])
		{
			$n= $_POST['n'];
			$potencia = 1;
			for($i=1; $i<=10; $i++)
			{
				$potencia = $potencia * $n;
				echo "Potencia $n elevado a $i= $potencia<br>";
			}
			
		}
		else
		{
			echo "No has introducido numero";
		}
	
	?>
</body>
</html>