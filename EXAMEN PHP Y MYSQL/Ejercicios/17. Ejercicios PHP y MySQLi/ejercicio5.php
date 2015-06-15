<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio5</title>
</head>
<body>
	<?php 
		if(isset($_POST['enviar'])){
			$asig = $_POST['asignatura'];
			$cred = $_POST['creditos'];
			$curso = $_POST['curso'];

			$conexion = mysqli_connect('localhost', 'root', '', 'centro');

			$consulta = "INSERT INTO asignaturas VALUES (NULL, '$asig', '$cred', '$curso')";

			$resultado = mysqli_query($conexion, $consulta);

			if($resultado == true){
				echo "Asignatura insertada correctamente";
			}
			else{
				echo "Se ha producido un error";
			}
			mysqli_close($conexion);
		}


	 ?>


	<form name='nueva_asignatura' method='POST' action='#'>
		Nombre de la asignatura <input type='text' name='asignatura'>
		<br>
		Creditos <input type='number' name='creditos'>
		<br>
		Curso
		<select name="curso">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
		<input type='submit' name='enviar'>
	</form>
</body>
</html>