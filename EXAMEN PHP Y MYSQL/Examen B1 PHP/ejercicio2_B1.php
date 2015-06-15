<?php 
			$codigo_cliente = $_POST['cod'];
			$nombre_cliente = $_POST['nombre'];
			$telefono = $_POST['tlf'];
			$i=1;
			$conexion = mysqli_connect('localhost', 'root', '', 'bdfruteriab1');
			if(!$conexion){
				echo "Error al conectar en la base de datos";
			}
			
			$consulta = "INSERT INTO clientes VALUES ('$codigo_cliente', '$nombre_cliente', '$telefono')";
			$resultado = mysqli_query($conexion, $consulta);
			if($resultado == true){
				echo "<h2>Cliente insertado correctamente</h2>";
				echo "<h3>Mostrando los clientes de la base de datos</h3>";
				$consulta_clientes = "SELECT nombre FROM clientes ORDER BY nombre ASC";
				$datos_clientes = mysqli_query($conexion, $consulta_clientes);
				echo "<ul>";
				while($fila = mysqli_fetch_array($datos_clientes)){
					echo "<li>Cliente $i: ".$fila['nombre']."</li>";
					$i++;
				}
				echo "</ul>";
			}
			else{
				echo "Se ha producido un error al insertar en la base de datos";
			}
			mysqli_close($conexion);

?>