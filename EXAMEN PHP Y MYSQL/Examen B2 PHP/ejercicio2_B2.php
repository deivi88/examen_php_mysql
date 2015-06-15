<?php 
			$codigo_producto = $_POST['cod'];
			$nombre_producto = $_POST['nombre'];
			$precio = $_POST['precio'];
			$i=1;
			$conexion = mysqli_connect('localhost', 'root', '', 'bdfruteria');
			if(!$conexion){
				echo "Error al conectar en la base de datos";
			}
			
			$consulta = "INSERT INTO productos VALUES ('$codigo_producto', '$nombre_producto', '$precio')";
			$resultado = mysqli_query($conexion, $consulta);
			if($resultado == true){
				echo "<h2>Producto insertado correctamente</h2>";
				echo "<h3>Mostrando los productos de la base de datos</h3>";
				$consulta_productos = "SELECT nombre FROM productos ORDER BY nombre ASC";
				$datos_productos = mysqli_query($conexion, $consulta_productos);
				echo "<ul>";
				while($fila = mysqli_fetch_array($datos_productos)){
					echo "<li>Producto $i: ".$fila['nombre']."</li>";
					$i++;
				}
				echo "</ul>";
			}
			else{
				echo "Se ha producido un error al insertar en la base de datos";
			}
			mysqli_close($conexion);

?>