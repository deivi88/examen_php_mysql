<html>
<head>
	<title> Ejercicio 7 </title>
</head>
<body>
	<?php
		//primero compruebo que haya introducido los dos datos
		if($_GET['nom'] && $_GET['edad'])
		{
			$nombre= $_GET['nom'];
			$edad = $_GET['edad'];
			echo "Hola $nombre";
			if($edad < 18)
			{
				echo " no eres mayor de edad";
			}
			else
			{
				echo " eres mayor de edad";
			}
		}
		else
		{
			echo "no has introducido algun dato";
		}
	
	?>
</body>
</html>