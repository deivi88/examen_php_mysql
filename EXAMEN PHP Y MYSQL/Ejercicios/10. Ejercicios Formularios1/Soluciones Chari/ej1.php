<html>
<head>
	<title> Ejercicio 1 </title>
</head>
<body>
	<?php
		//primero compruebo que haya algún dato en el campo nom
		if($_GET['nom'])
		{
			$nombre= $_GET['nom'];
			echo "Hola $nombre";
		}
		else
		{
			echo "no has introducido nombre";
		}
	
	?>
</body>
</html>