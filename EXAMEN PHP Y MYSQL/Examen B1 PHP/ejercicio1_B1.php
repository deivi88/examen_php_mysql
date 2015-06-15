<?php 
	$nombre_cliente = $_POST['nombre'];
	$mes_producto = $_POST['mes'];
	$i=1;
	$suma=0;
	$marca_hoy = time();
	$dia = date('d', $marca_hoy);			
	$mes = date('M', $marca_hoy);
	$anio = date('Y', $marca_hoy);



	$conexion = mysqli_connect("localhost", "root", "", "bdfruteriab1");
	if(!$conexion){
		echo "Error al conectar en la base de datos";
	}


	$consulta_cantidad = "SELECT productos.nombre,cantidad FROM clientes, productos, compras WHERE clientes.codigo = compras.cod_cliente AND productos.codigo = compras.cod_producto AND clientes.nombre='$nombre_cliente' AND mes='$mes_producto'";
	$datos_cantidad = mysqli_query($conexion,$consulta_cantidad);
	$num_registros = mysqli_affected_rows($conexion);


	echo "Hola ".$nombre_cliente." tus compras del mes ".$mes_producto." a día ".$dia." de ".$mes." de ".$anio." son:<br><br>";
	echo "<table border>";
	if($num_registros == 0){
		echo "El cliente ".$nombre_cliente." no realizó compras en el mes ".$mes_producto.".";
	}
	else{
		while($fila = mysqli_fetch_array($datos_cantidad)){
			echo "<tr><td>Compra $i</td><td>".$fila['nombre']."</td><td>".$fila['cantidad']."</td></tr>";
			$i++;
			$suma=$suma+$fila['cantidad'];
		}
		$media = $suma/($i-1);
		echo "<tr><td>Compra media</td><td></td><td>$media</td></tr>";
		echo "</table>";
	}
	mysqli_close($conexion);


?>