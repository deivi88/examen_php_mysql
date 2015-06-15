<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio4</title>
</head>
<body>
	<?php
	$conexion = mysqli_connect('localhost', 'root', '', 'centro');

	$consulta_cursos = 'SELECT DISTINCT curso FROM asignaturas'; 

	$datos_cursos = mysqli_query($conexion, $consulta_cursos);

	while ($curso=mysqli_fetch_array($datos_cursos)){
		echo "Asignaturas del curso ".$curso['curso']."<br><br>";
		$consulta_asignaturas = "SELECT cod_asig, nom_asig, creditos
								FROM asignaturas
								WHERE curso=$curso[curso]";

		$asig=mysqli_query($conexion, $consulta_asignaturas);

		echo "<table border><tr><td>CODIGO</td><td>NOMBRE</td><td>CREDITOS</td></tr>";
		while($datos = mysqli_fetch_array($asig)){
			echo "<tr><td>".$datos['cod_asig']."</td><td>".$datos['nom_asig']."</td><td>".$datos['creditos']."</td></tr>";
		}
		echo "</table><br>";
	}

	mysqli_close($conexion);


?>
</body>
</html>