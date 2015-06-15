<?php 

	//Genero el array a mano
	$array = array("Granada"=>150000,"Madrid"=>3000000,"Barcelona"=>2879200,"Malaga"=>240000,"Sevilla"=>500000,"Valencia"=>1584600,"Tarragona"=>485210);

	echo "<table border = '1'>";

	//lo muestro tal cual está

	foreach($array as $ciudad=>$poblacion)
	{
		echo "<tr><td>$ciudad</td><td>$poblacion</td></tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "<b>Ordenado Alfabeticamente</b>";
	//Ordeno una copia para no perder el original
	$ordenado = $array;
	ksort($ordenado);

	echo "<table border = '1'>";

	foreach($ordenado as $ciudadA=>$poblacionA)
	{
		echo "<tr><td>$ciudadA</td><td>$poblacionA</td></tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "<b>Ordenado Poblacion</b>";
	//Ordeno una copia para no perder el original
	$ordenado2 = $array;
	asort($ordenado2);

	echo "<table border = '1'>";

	foreach($ordenado2 as $ciudadP=>$poblacionP)
	{
		echo "<tr><td>$ciudadP</td><td>$poblacionP</td></tr>";
	}
	echo "</table>";
	echo "<br>";
	

	echo "<b>Mayor Poblacion</b>";
	//Ordeno de mayor a menor una copia para no perder el original
	$ordenado3=$array;
	arsort($ordenado3);
	//cojo los nombres de las posiciones y los contenidos de forma individual
	$ciudad = array_keys($ordenado3);
	$poblacion = array_values($ordenado3);
	//Muestro sólo la primera posición de cada uno de los arrays
	echo "<table border = '1'>";
	echo "<tr><td>$ciudad[0]</td> <td>$poblacion[0]</td></tr>";
	echo "</table>";

	echo "<br>";
	echo "<b>Mayor Poblacion</b>";
	//Ordeno de menor a mayor una copia para no perder el original
	$ordenado4=$array;
	asort($ordenado4);
	//cojo los nombres de las posiciones y los contenidos de forma individual
	$ciudad = array_keys($ordenado4);
	$poblacion = array_values($ordenado4);
	//Muestro sólo la primera posición de cada uno de los arrays
	echo "<table border = '1'>";
	echo "<tr><td>$ciudad[0]</td> <td>$poblacion[0]</td></tr>";
	echo "</table>";


 ?>