<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio9</title>
</head>
<body>
	<?php 
		if(isset($_POST['enviar'])){
			$alumno = $_POST['alumno'];
			$asignatura = $_POST['asignatura'];
			$convocatoria = $_POST['convocatoria'];

			$conexion = mysqli_connect('localhost', 'root', '', 'centro');

			$consulta_dni = "SELECT dni FROM alumnos WHERE nom_alum='$alumno'";
			$resultado_dni = mysqli_query($conexion, $consulta_dni);
			$fila_dni = mysqli_fetch_array($resultado_dni);
			$dni = $fila_dni['dni'];

			$consulta_cod_asig = "SELECT cod_asig FROM asignaturas WHERE nom_asig='$asignatura'";
			$resultado_cod_asig = mysqli_query($conexion, $consulta_cod_asig);
			$fila_cod_asig = mysqli_fetch_array($resultado_cod_asig);
			$cod_asig = $fila_cod_asig['cod_asig'];

			if($asignatura=='Lengua'){
				$consulta_borrar = "DELETE FROM matriculas WHERE dni='$dni' AND cod_asig='$cod_asig' AND convocatoria='$convocatoria'";
				$resultado_borrar = mysqli_query($conexion, $consulta_borrar);
				echo "Pasa por paso 1";
			}elseif($asignatura == 0 && $convocatoria == 0 || $asignatura == 0){
				$consulta_borrar1 = "DELETE FROM matriculas WHERE dni='$dni'";
				$resultado_borrar1 = mysqli_query($conexion, $consulta_borrar1);
				echo "$asignatura";
				echo "Pasa por paso2";
			}elseif($convocatoria == 0){
				$consulta_borrar2 = "DELETE FROM matriculas WHERE dni='$dni' AND cod_asig='$cod_asig'";
				$resultado_borrar2 = mysqli_query($conexion, $consulta_borrar2);
				echo "Pasa por paso 3";
			}
			
			if($resultado_borrar == true || $resultado_borrar1 == true  || $resultado_borrar2 == true){
				echo "Se ha borrado la matricula correctamente";
			}
			else{
				echo "Se ha producido un error";
			}
			mysqli_close($conexion);
		}


	 ?>

	<?php 
		$conexion = mysqli_connect('localhost', 'root', '', 'centro');
		$consulta_nombre = "SELECT DISTINCT nom_alum FROM alumnos, matriculas WHERE alumnos.dni=matriculas.dni";
		$consulta_asignaturas = "SELECT DISTINCT nom_asig FROM asignaturas, matriculas WHERE asignaturas.cod_asig=matriculas.cod_asig";
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
			<option value="0">Elige Asignatura</option>
			<?php
				while($fila=mysqli_fetch_array($datos_asignaturas)){
					echo "<option value=".$fila['nom_asig'].">".$fila['nom_asig']."</option>";
				}

			 ?>
		</select>
		<br>
		Seleccione Convocatoria
		<select name="convocatoria">
			<option value="0">Elige Convocatoria</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
		<br>
		<input type='submit' name='enviar' value='Borrar'>
		<br><br>
	</form>
	<?php 
		mysqli_close($conexion);
	?>
</body>
</html>