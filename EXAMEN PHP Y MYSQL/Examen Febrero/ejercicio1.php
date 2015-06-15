<html>
	<head>
		<title>Ejercicio 1</title>
	</head>
	<body>
		<?php
			$nombre = $_GET['cliente'];
			$direccion = $_GET['direc'];
			$p1 = $_GET['p1'];
			$p2 = $_GET['p2'];
			$p3 = $_GET['p3'];
			$p4 = $_GET['p4'];
			$total = (10*$p1)+(3*$p2)+(5*$p3)+(0.5*$p4);
			$marca_hoy = time();
			$dia = date('l', $marca_hoy);
			
			if ($dia=="Monday") $dia="lunes";
			if ($dia=="Tuesday") $dia="martes";
			if ($dia=="Wednesday") $dia="miércoles";
			if ($dia=="Thursday") $dia="jueves";
			if ($dia=="Friday") $dia="viernes";
			if ($dia=="Saturday") $dia="sábado";
			if ($dia=="Sunday") $dia="domingo";
			
			$dia_numero = date('j', $marca_hoy);
			$mes = date('F', $marca_hoy);

			if ($mes=="January") $mes="enero";
			if ($mes=="February") $mes="febrero";
			if ($mes=="March") $mes="marzo";
			if ($mes=="April") $mes="abril";
			if ($mes=="May") $mes="mayo";
			if ($mes=="June") $mes="junio";
			if ($mes=="July") $mes="julio";
			if ($mes=="August") $mes="agosto";
			if ($mes=="September") $mes="septiembre";
			if ($mes=="October") $mes="octubre";
			if ($mes=="November") $mes="noviembre";
			if ($mes=="December") $mes="diciembre";

			$anio = date('Y', $marca_hoy);

			echo "Pedido hecho por $nombre:";
			echo "<br><br>";
			echo "<table border>
					 <tr><td>Producto</td><td>Cantidad</td></tr>";
			echo 	"<tr><td>Producto 1</td><td>$p1</td></tr>";
			echo 	"<tr><td>Producto 2</td><td>$p2</td></tr>";
			echo 	"<tr><td>Producto 3</td><td>$p3</td></tr>";
			echo 	"<tr><td>Producto 4</td><td>$p4</td></tr>";
			echo 	"<tr><td>FACTURA</td><td>$total</td></tr>";
			echo "</table><br><br>";
			echo "Su pedido será enviado a la dirección $direccion en 3 días a partir del $dia, dia $dia_numero de $mes de $anio";




		?>
	</body>
</html>