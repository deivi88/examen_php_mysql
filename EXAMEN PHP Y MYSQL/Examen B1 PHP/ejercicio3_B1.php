<?php 
	$nombre_producto = $_POST['nombre'];

	$conexion = mysqli_connect('localhost', 'root', '', 'bdfruteriab1');
	if(!$conexion){
		echo "Error al conectar en la base de datos";
	}

	$consulta_min="SELECT clientes.nombre, cantidad FROM clientes, productos, compras WHERE clientes.codigo = compras.cod_cliente AND productos.codigo = compras.cod_producto AND productos.nombre = '$nombre_producto' ORDER BY cantidad ASC";
	$datos_min = mysqli_query($conexion, $consulta_min);
	$fila_min = mysqli_fetch_array($datos_min);

	$consulta_max="SELECT clientes.nombre, cantidad FROM clientes, productos, compras WHERE clientes.codigo = compras.cod_cliente AND productos.codigo = compras.cod_producto AND productos.nombre = '$nombre_producto' ORDER BY cantidad DESC";
	$datos_max = mysqli_query($conexion, $consulta_max);
	$fila_max = mysqli_fetch_array($datos_max);

	echo "El cliente que compró la mayor cantidad de $nombre_producto fue <b>".$fila_max['nombre']." </b> que compró <b>".$fila_max['cantidad']."</b> kilos.<br>";
	echo "El cliente que compró la menor cantidad de $nombre_producto fue <b>".$fila_min['nombre']." </b> que compró <b>".$fila_min['cantidad']."</b> kilos.<br>";

	mysqli_close($conexion);

?>