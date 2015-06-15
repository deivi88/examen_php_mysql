<html>
<head>
</head>
<body>
	<?php
	
		if(isset($_POST['enviar']))
		{
			//numero de veces que se repetirá la imagen
			$n = $_POST['nom'];
			
			//cojo todo lo que necesito de la imagen
			$nom = $_FILES['archivo']['name'];
			$temp = $_FILES['archivo']['tmp_name'];
			
			//primero compruebo si la carpeta usuarios existe y si no existe la creo
		
			if(!file_exists("./usuarios"))
			{
				mkdir("./usuarios");
			}
			//ahora compruebo si dentro de usuarios existe la carpeta del usuario y si no existe la creo
		
			if(!file_exists("./usuarios/$n"))
			{
				mkdir("./usuarios/$n");
			}
			
			//ya puedo subir la foto
			
			move_uploaded_file($temp, "./usuarios/$n/$nom");
			
			
			
			//Y ya puedo mostrar el mensaje de confirmación
			echo "El archivo $nom, del usuario $n ha sido subido correctamente";
			echo "<br><br><br>";
		}
	
	?>
	
	<form name='ej6' action='#' method='post' enctype='multipart/form-data'>
	
		Nombre: <input type='text' name='nom'>
		<br>		
		Archivo: <input type='file' name='archivo'>
		<br>
		
		<input type='submit' name='enviar'>
	</form>
	
</body>
</html>