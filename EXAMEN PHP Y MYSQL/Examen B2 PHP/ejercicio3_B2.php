<?php 
	$nombre_cliente = $_POST['nombre'];

	$conexion = mysqli_connect('localhost', 'root', '', 'bdfruteria');
	if(!$conexion){
		echo "Error al conectar en la base de datos";
	}

	$consulta_min="SELECT productos.nombre, cantidad FROM clientes, productos, compras WHERE clientes.codigo = compras.cod_cliente AND productos.codigo = compras.cod_producto AND clientes.nombre = '$nombre_cliente' ORDER BY cantidad ASC";
	$datos_min = mysqli_query($conexion, $consulta_min);
	$fila_min = mysqli_fetch_array($datos_min);

	$consulta_max="SELECT productos.nombre, cantidad FROM clientes, productos, compras WHERE clientes.codigo = compras.cod_cliente AND productos.codigo = compras.cod_producto AND clientes.nombre = '$nombre_cliente' ORDER BY cantidad DESC";
	$datos_max = mysqli_query($conexion, $consulta_max);
	$fila_max = mysqli_fetch_array($datos_max);

	echo "El cliente $nombre_cliente de lo que compró la mayor cantidad fue de <b>".$fila_max['nombre']."</b> que compró <b>".$fila_max['cantidad']."</b> kilos.<br>";
	echo "El cliente $nombre_cliente de lo que compró la menor cantidad fue de <b>".$fila_min['nombre']."</b> que compró <b>".$fila_min['cantidad']."</b> kilos.";

	mysqli_close($conexion);

?>