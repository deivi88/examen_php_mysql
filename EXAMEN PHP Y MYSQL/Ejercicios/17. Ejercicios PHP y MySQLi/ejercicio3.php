<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio3</title>
</head>
<body>
	<?php 
		$conexion = mysqli_connect('localhost', 'root', '', 'centro');
		if(!$conexion){
			echo "Error al conectar";
		}

		$consulta = "SELECT alumnos.nom_alum, matriculas.cod_asig, matriculas.convocatoria, matriculas.calificacion FROM matriculas, alumnos WHERE alumnos.dni=matriculas.dni";
		$resultado = mysqli_query($conexion, $consulta);


		echo "<table border><tr><td>NOMBRE</td><td>CODIGO</td><td>CONVOCATORIA</td><td>NOTA</td></tr>";
		while($fila = mysqli_fetch_array($resultado)){
			echo "<tr><td>".$fila['nom_alum']."</td><td>".$fila['cod_asig']."</td><td>".$fila['convocatoria']."</td><td>".$fila['calificacion']."</td></tr>";
		}
		echo "</table>";
		mysqli_close($conexion);

	 ?>
</body>
</html>