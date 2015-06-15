<?php 
	$nombre = $_GET['nombre'];
	$apellido = $_GET['apell'];
	$nota1 = $_GET['nota1'];
	$nota2 = $_GET['nota2'];
	$nota3 = $_GET['nota3'];
	$marca_hoy = time();
	$dia = date('d', $marca_hoy);			
	$mes = date('F', $marca_hoy);
	$anio = date('Y', $marca_hoy);
	$nota_media = ($nota1+$nota2+$nota3)/3;
	if($nota_media >=0 && $nota_media<5){
		$nota_final ="Suspenso";
	}elseif($nota_media>=5 && $nota_media<7){
		$nota_final ="Aprobado";
	}
	elseif($nota_media>=7 && $nota_media<9){
		$nota_final ="Notable";
	}
	elseif($nota_media>=9 && $nota_media<10){
		$nota_final ="Sobresaliente";
	}
	elseif($nota_media==10){
		$nota_final ="Matrícula de honor";
	}
	echo "Hola $nombre $apellido tu boletín de notas, a día $dia de $mes de $anio es: <br><br>";
	echo "<table border>
			<tr><td>Nota 1</td><td>$nota1</td></tr>
			<tr><td>Nota 2</td><td>$nota2</td></tr>
			<tr><td>Nota 3</td><td>$nota3</td></tr>
			<tr><td>Nota Final</td><td>$nota_final</td></tr>
			</table>";
?>