<?php

	$a['Antonio']['Matematicas']=5;
	$a['Antonio']['Lengua']=8;
	$a['Antonio']['Ciencias']=9;
	$a['Antonio']['Geografia']=7;

	$a['Ana']['Matematicas']=8;
	$a['Ana']['Lengua']=7;
	$a['Ana']['Ciencias']=4.5;
	$a['Ana']['Geografia']=9;

	$a['Benito']['Matematicas']=9;
	$a['Benito']['Lengua']=7;
	$a['Benito']['Ciencias']=9;
	$a['Benito']['Geografia']=3;


	echo "<table border>";
	echo "<tr><td> Alumno </td> <td> Matematicas </td>";
	echo "<td> Lengua </td><td> Ciencias Naturales </td>";
	echo "<td> Geografia </td><td> Media </td></tr>";


	foreach ($a as $nombre=>$notas)
	{
		$media=0;
		echo "<tr> <td> $nombre </td>";
		foreach ($notas as $nota)
		{
			$media = $media+$nota;
			echo "<td> $nota </td>";
		}
		$media = $media / 4;
		echo "<td> $media </td></tr>";
	}
	echo "</table>";

	echo "Mostrando sólo las notas de Ana<br>";
	$alum = 'Ana';

	echo "<table border>";
	echo "<tr><td> Alumno </td> <td> Matematicas </td>";
	echo "<td> Lengua </td><td> Ciencias Naturales </td>";
	echo "<td> Geografia </td><td> Media </td></tr>";

	$media=0;
	echo "<tr> <td> $alum </td>";
	foreach ($a[$alum] as $nota)
	{
		$media = $media+$nota;
		echo "<td> $nota </td>";		
		
	}
	$media = $media / 4;
	echo "<td> $media </td></tr>";

	echo "</table>";

?>