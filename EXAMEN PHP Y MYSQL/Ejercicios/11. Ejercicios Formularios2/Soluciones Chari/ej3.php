<html>
<head>
</head>
<body>
	<?php
	
		if(isset($_POST['enviar']))
		{
			//numero de veces que se repetirá la imagen
			$n = $_POST['num'];
			
			//cojo todo lo que necesito de la imagen
			$nom = $_FILES['img']['name'];
			$tam = $_FILES['img']['size'];
			$temp = $_FILES['img']['tmp_name'];
			$tipo = $_FILES['img']['type'];
			
			//calculo cuanto son dos megas en bytes
			$megas=2*1024*1024; 
			
			//si el tamaño la imagen es mayor de dos megas no sirve
			if($tam > $megas)
			{
				echo "La imagen no puede ser mayor de 2 megas";
				exit();
			}
			//Compruebo que el tipo es imagen
		
			if($tipo != 'image/jpeg' and $tipo != 'image/png' and $tipo != 'image/gif' and $tipo != 'image/bmp' and $tipo != 'image/tiff')
			{
				//si el tipo del archivo no es ninguno de tipo imagen muestro un error
				echo "El archivo subido debe ser imagen";
				//termino el script
				exit();
			}
			
			//si todo va bien subo la imagen
			move_uploaded_file($temp, $nom);
			
			//Y ya puedo crear la tabla
			echo "<table border>";
			echo "<tr>";
			for ($i=0; $i<$n; $i++)
			{
				if($i%3==0)
				{
					echo "</tr><tr>";
				}
				echo "<td> <img src='$nom'> </td>";
			}
			echo "</tr></table>";
		}
	
	?>
	
	<form name='ej3' action='#' method='post' enctype='multipart/form-data'>
	
		Numero: <input type='text' name='num'>
		<br>		
		Imagen: <input type='file' name='img'>
		<br>
		
		<input type='submit' name='enviar'>
	</form>
	
</body>
</html>