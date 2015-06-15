<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio2</title>
</head>
<body>
	<?php 
		$conexion = mysqli_connect('localhost', 'root', '', 'centro');
		if(!$conexion){
			echo "Error al conectar";
		}

		$consulta = "SELECT dni, cod_asig, convocatoria, calificacion FROM matriculas";
		$resultado = mysqli_query($conexion, $consulta);


		echo "<table border><tr><td>DNI</td><td>CODIGO</td><td>CONVOCATORIA</td><td>NOTA</td></tr>";
		while($fila = mysqli_fetch_array($resultado)){
			echo "<tr><td>".$fila['dni']."</td><td>".$fila['cod_asig']."</td><td>".$fila['convocatoria']."</td><td>".$fila['calificacion']."</td></tr>";
		}
		echo "</table>";
		mysqli_close($conexion);

	 ?>
</body>
</html>