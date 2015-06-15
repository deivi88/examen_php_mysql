<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio7</title>
</head>
<body>
	<?php 
		if(isset($_POST['enviar'])){
			$alumno = $_POST['alumno'];
			$asignatura = $_POST['asignatura'];
			$convocatoria = $_POST['convocatoria'];
			$calificacion = $_POST['calificacion'];

			$conexion = mysqli_connect('localhost', 'root', '', 'centro');

			$consulta_dni = "SELECT dni FROM alumnos WHERE nom_alum='$alumno'";
			$resultado_dni = mysqli_query($conexion, $consulta_dni);
			$fila_dni = mysqli_fetch_array($resultado_dni);
			$dni = $fila_dni['dni'];

			$consulta_cod_asig = "SELECT cod_asig FROM asignaturas WHERE nom_asig='$asignatura'";
			$resultado_cod_asig = mysqli_query($conexion, $consulta_cod_asig);
			$fila_cod_asig = mysqli_fetch_array($resultado_cod_asig);
			$cod_asig = $fila_cod_asig['cod_asig'];

			$consulta = "INSERT INTO matriculas VALUES ('$cod_asig', '$dni', '$convocatoria', '$calificacion')";

			$resultado = mysqli_query($conexion, $consulta);

			if($resultado == true){
				echo "Matricula insertada correctamente";
			}
			else{
				echo "Se ha producido un error";
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
		Seleccione Nombre del Alumno
		<select name="alumno">
			<?php
				while($fila=mysqli_fetch_array($datos_nombre)){
					echo "<option value=".$fila['nom_alum'].">".$fila['nom_alum']."</option>";
				}

			 ?>
		</select>
		<br>
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
		Calificación
		<select name="calificacion">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
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