<html>
<head>
	<title> Ejercicio 12 </title>
</head>
<?php
		//No hace falta comprobar los datos porque est�n preseleccionados 
		$nombre = $_POST['nombre'];
		$edad = $_POST['edad'];
		$fondo = $_POST['fondo'];
		$texto = $_POST['texto'];
		$fuente = $_POST['fuente'];
		
		echo "<body bgcolor='$fondo'>";
		echo "<font face='$fuente' color='$texto'>";
		echo "Hola $nombre, se que tienes $edad a�os. <br> Bienvenido a mi pagina";
		echo "</font>";
	?>
</body>
</html>