<html>
<head>
</head>
<body>
	<?php
	
		$nick = $_POST['nick'];
		
		//cojo todo lo que necesito del primer archivo
		$temp = $_FILES['foto']['tmp_name'];
		$tipo = $_FILES['foto']['type'];
		
				
		//Compruebo de que tipo es la subida para luego agregarle la extension correcta al nombre
		
		switch ($tipo)
		{
			case 'image/jpeg':
								$nombre = $nick.'.jpg';
								break;
			case 'image/png':
								$nombre = $nick.'.png';
								break;
			case 'image/gif':
								$nombre = $nick.'.gif';
								break;
			case 'image/bmp':
								$nombre = $nick.'.bmp';
								break;
			case 'image/tiff':
								$nombre = $nick.'.tiff';
								break;
			default:
					echo "formato de imagen no valido";
					exit();
		}
		
			
		//si todo está correcto lo almaceno en una carpeta que tenga como nombre el nick del usuario
		
		//primero compruebo si la carpeta existe y si no existe la creo
		
		if(!file_exists("./$nick"))
		{
			mkdir("./$nick");
		}
		
		//ya puedo subir la foto
		
		move_uploaded_file($temp, "./$nick/$nombre");
	
	?>
	
</body>
</html>