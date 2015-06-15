<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio1</title>
</head>
<body>
	<?php 
		$conexion = mysqli_connect('localhost', 'root', '', 'centro');
		if(!$conexion){
			echo "Error al conectar";
		}

		$consulta = "SELECT nom_alum, dni, fecha_nac FROM alumnos ORDER BY fecha_nac DESC";
		$resultado = mysqli_query($conexion, $consulta);


		echo "<table border><tr><td>NOMBRE</td><td>DNI</td><td>FECHA DE NACIMIENTO</td></tr>";
		while($fila = mysqli_fetch_array($resultado)){
			echo "<tr><td>".$fila['nom_alum']."</td><td>".$fila['dni']."</td><td>".$fila['fecha_nac']."</td></tr>";
		}
		echo "</table>";
		mysqli_close($conexion);

	 ?>
</body>
</html>