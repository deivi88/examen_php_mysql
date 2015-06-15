<?php 
			$dni = $_POST['dni'];
			$nombre = $_POST['nombre'];
			$edad = $_POST['edad'];
			$i=1;
			$conexion = mysqli_connect('localhost', 'root', '', 'bdcentroantigua');
			if(!$conexion){
				echo "Error al conectar en la base de datos";
			}
			
			$consulta = "INSERT INTO alumnos VALUES ('$dni', '$nombre', '$edad')";
			$resultado = mysqli_query($conexion, $consulta);
			if($resultado == true){
				echo "<h2>Alumno insertado correctamente</h2>";
				echo "<h3>Mostrando los alumnos de la base de datos</h3>";
				$consulta_alumnos = "SELECT nombre FROM alumnos";
				$datos_alumnos = mysqli_query($conexion, $consulta_alumnos);
				echo "<ul>";
				while($fila = mysqli_fetch_array($datos_alumnos)){
					echo "<li>Alumno $i: ".$fila['nombre']."</li>";
					$i++;
				}
				echo "</ul>";
			}
			else{
				echo "Se ha producido un error al insertar en la base de datos";
			}
			mysqli_close($conexion);

?>