<html>
<head>
</head>
<body>
	<?php
	
		//cojo todo lo que necesito del primer archivo
		$nom1 = $_FILES['f1']['name'];
		$tam1 = $_FILES['f1']['size'];
		$temp1 = $_FILES['f1']['tmp_name'];
		$tipo1 = $_FILES['f1']['type'];
		
		//cojo todo lo que necesito del segundo archivo
		$nom2 = $_FILES['f2']['name'];
		$tam2 = $_FILES['f2']['size'];
		$temp2 = $_FILES['f2']['tmp_name'];
		$tipo2 = $_FILES['f2']['type'];
		
		//Compruebo que el tipo de los dos archivos son imágenes
		
		if($tipo1 != 'image/jpeg' and $tipo1 != 'image/png' and $tipo1 != 'image/gif' and $tipo1 != 'image/bmp' and $tipo1 != 'image/tiff')
		{
			//si el tipo del archivo no es ninguno de tipo imagen muestro un error
			echo "Los archivos deben ser imágenes";
			//termino el script
			exit();
		}
				
		if($tipo2 != 'image/jpeg' and $tipo2 != 'image/png' and $tipo2 != 'image/gif' and $tipo2 != 'image/bmp' and $tipo2 != 'image/tiff')
		{
			//si el tipo del archivo no es ninguno de tipo imagen muestro un error
			echo "Los archivos deben ser imágenes";
			//termino el script
			exit();
		}
		
		//Si no ha entrado en ningun if es que los dos archivos son imagenes y ya puedo subirlos al servidor
		move_uploaded_file($temp1, $nom1);
		move_uploaded_file($temp2, $nom2);
		
		//compruebo que imagen es mayor para mostrarlas ordenadas por tamaño
		if($tam1<$tam2)
		{
			echo "<img src='./$nom1'>";
			echo "<br><br><img src='./$nom2'>";
		}
		else
		{
			echo "<img src='./$nom1'>";
			echo "<br><br><img src='./$nom2'>";
		}
		
	
	?>
	
</body>
</html>