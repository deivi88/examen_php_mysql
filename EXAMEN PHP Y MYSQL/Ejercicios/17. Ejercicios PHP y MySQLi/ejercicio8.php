<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio8</title>
</head>
<body>
	<?php 
		if(isset($_POST['enviar'])){
			$asignatura = $_POST['asignatura'];
			$convocatoria = $_POST['convocatoria'];

			$conexion = mysqli_connect('localhost', 'root', '', 'centro');

			$consulta_nombre = "SELECT nom_alum FROM alumnos, matriculas, asignaturas WHERE alumnos.dni=matriculas.dni AND asignaturas.cod_asig=matriculas.cod_asig AND convocatoria='$convocatoria' AND nom_asig='$asignatura'";
			$resultado_nombre = mysqli_query($conexion, $consulta_nombre);
			
			echo "<table border><tr><td>NOMBRE</td><td>ASIGNATURA</td><td>CONVOCATORIA</td></tr>";
			while($fila=mysqli_fetch_array($resultado_nombre)){
					echo "<tr><td>".$fila['nom_alum']."</td><td>".$asignatura."</td><td>".$convocatoria."</td></tr>";
				}
			mysqli_close($conexion);
		}


	 ?>
	
	<?php 
		$conexion = mysqli_connect('localhost', 'root', '', 'centro');
		$consulta_nombre = "SELECT nom_alum FROM alumnos";
		$consulta_asignaturas = "SELECT nom_asig FROM asignaturas";
		$datos_nombre = mysqli_query($conexion, $consulta_nombre);
		$datos_asignaturas = mysqli_query($conexion, $consulta_asignaturas);

	?>

	<form name='nueva_matricula' method='POST' action='#'>
		Seleccione Asignatura
		<select name="asignatura">
			<?php
				while($fila=mysqli_fetch_array($datos_asignaturas)){
					echo "<option value=".$fila['nom_asig'].">".$fila['nom_asig']."</option>";
				}

			 ?>
		</select>
		<br>
		Seleccione Convocatoria
		<select name="convocatoria">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
		<br>
		<input type='submit' name='enviar'>
		<br><br>
	</form>
	<?php 
		mysqli_close($conexion);
	?>
</body>
</html>