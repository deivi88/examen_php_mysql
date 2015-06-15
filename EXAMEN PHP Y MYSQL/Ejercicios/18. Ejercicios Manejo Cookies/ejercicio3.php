<?php
    $dia=date("l");

	if ($dia=="Monday") $dia="Lunes";
	if ($dia=="Tuesday") $dia="Martes";
	if ($dia=="Wednesday") $dia="Miércoles";
	if ($dia=="Thursday") $dia="Jueves";
	if ($dia=="Friday") $dia="Viernes";
	if ($dia=="Saturday") $dia="Sábado";
	if ($dia=="Sunday") $dia="Domingo";

	$mes=date("F");

	if ($mes=="January") $mes="Enero";
	if ($mes=="February") $mes="Febrero";
	if ($mes=="March") $mes="Marzo";
	if ($mes=="April") $mes="Abril";
	if ($mes=="May") $mes="Mayo";
	if ($mes=="June") $mes="Junio";
	if ($mes=="July") $mes="Julio";
	if ($mes=="August") $mes="Agosto";
	if ($mes=="September") $mes="Septiembre";
	if ($mes=="October") $mes="Octubre";
	if ($mes=="November") $mes="Noviembre";
	if ($mes=="December") $mes="Diciembre";

	$anio=date("Y");
	$dia2=date("d");
	$hora=date("H");
	$minutos=date("i");
	$segundos=date("s");

	$mensaje_fecha = "$dia, $dia2 de $mes de $anio a las $hora:$minutos:$segundos";

    if(isset($_COOKIE['fecha'])){  
        setcookie('fecha', $mensaje_fecha); 
        $mensaje = 'Su última sesion fue: ' . $_COOKIE['fecha']; 
    } 
    else{ 
        setcookie('fecha', $mensaje_fecha); 
        $mensaje = 'Bienvenido a nuestra página web'; 
    } 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		
		echo "<h2>".$mensaje."</h2>";

	?>
	
</body>
</html>