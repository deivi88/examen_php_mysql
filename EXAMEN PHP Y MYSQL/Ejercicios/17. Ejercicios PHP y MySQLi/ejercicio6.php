<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio6</title>
</head>
<body>
	<?php 
		if(isset($_POST['enviar'])){
			$alumno = $_POST['alumno'];

			$conexion = mysqli_connect('localhost', 'root', '', 'centro');

			$consulta = "SELECT alumnos.nom_alum, matriculas.cod_asig, matriculas.convocatoria, matriculas.calificacion FROM alumnos, matriculas WHERE alumnos.dni=matriculas.dni AND nom_alum='$alumno'";

			$resultado = mysqli_query($conexion, $consulta);

			$num_campos = mysqli_num_rows($resultado);

			if(($num_campos = mysqli_num_rows($resultado))==NULL){
				echo "No existe ese alumno en la base de datos";
				mysqli_close($conexion);
			}
			elseif(($num_campos = mysqli_num_rows($resultado))==0){
				echo "El alumno no tiene ninguna matricula";
				mysqli_close($conexion);
			}
			else{
				echo "<table border><tr><td>NOMBRE</td><td>CODIGO</td><td>CONVOCATORIA</td><td>NOTA</td></tr>";
				while($fila=mysqli_fetch_array($resultado)){
					echo "<tr><td>".$fila['nom_alum']."</td><td>".$fila['cod_asig']."</td><td>".$fila['convocatoria']."</td><td>".$fila['calificacion']."</td></tr>";
				}
				mysqli_close($conexion);
			}
		}


	 ?>


	<form name='nueva_asignatura' method='POST' action='#'>
		Nombre del alumno <input type='text' name='alumno'>
		<br>
		<input type='submit' name='enviar'>
		<br><br>
	</form>
</body>
</html>