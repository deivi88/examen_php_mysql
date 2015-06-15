<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	$m['Antonio']['Matemáticas']=5;
	$m['Antonio']['Lengua']=8.3;
	$m['Antonio']['Ciencias Naturales']=9;
	$m['Antonio']['Geografía']=7;

	$m['Ana']['Matemáticas']=8;
	$m['Ana']['Lengua']=7;
	$m['Ana']['Ciencias Naturales']=4.5;
	$m['Ana']['Geografía']=9;

	$m['Benito']['Matemáticas']=9;
	$m['Benito']['Lengua']=6.75;
	$m['Benito']['Ciencias Naturales']=9;
	$m['Benito']['Geografía']=3.1;

	echo "<table border>";
	echo "<tr>
			<td>Alumno</td>
			<td>Matemáticas</td>
			<td>Lengua</td>
			<td>Ciencias Naturales</td>
			<td>Geografía</td>
			<td>Media</td>
		</tr>";

	foreach($m as $nombre=>$notas){
		$media=0;
		echo "<tr>
			<td>$nombre</td>";
			foreach($notas as $nota){
				$media = $media+$nota;
				echo "<td>$nota</td>";
			}
		$media=$media/4;
		echo "<td>$media</td>
		</tr>";
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
	foreach ($m[$alum] as $nota)
	{
		$media = $media+$nota;
		echo "<td> $nota </td>";		
		
	}
	$media = $media / 4;
	echo "<td> $media </td></tr>";

	echo "</table>";







	 ?>
</body>
</html>