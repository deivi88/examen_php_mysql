<html>
<head>
</head>
<body>
	<?php
	
		$nom = $_POST['nom'];
		$dni = $_POST['dni'];
		
		//cojo todo lo que necesito del primer archivo
		$tam = $_FILES['curri']['size'];
		$temp = $_FILES['curri']['tmp_name'];
		$tipo = $_FILES['curri']['type'];
		
		//calculo cuanto son dos megas en bytes
		$megas=2*1024*1024; 
		
		//si el tamaño del archivo es mayor de dos megas no sirve
		if($tam > $megas)
		{
			echo "El archivo subido no puede ser mayor de 2 megas";
			exit();
		}
		
		//compruebo que lo subido es un pdf
		if($tipo != 'application/pdf')
		{
			echo "El curriculum debe estar en formato pdf";
			exit();
		}
		
		//si todo está correcto lo almaceno y como nombre le pongo el dni
		//me debo asegurar que la extensión del nombre sea .pdf
		$nombre_archivo=$dni.'.pdf';
		
		move_uploaded_file($temp, $nombre_archivo);
	
	?>
	
</body>
</html>