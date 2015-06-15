<?php 

	//Genero el array aleatorio
	for($i=0; $i<12; $i++)
	{
		$original[$i]=mt_rand(1,1000);
	}


	//Empiezo a mostrar la tabla
	echo "<table border = '1'";
	echo "<tr><td>Vector Original	";

	for($i=0;$i<12;$i++)
	{
		
		echo "$original[$i] - ";
	}

	echo "</td></tr>";
	echo "<tr><td>Mayor	";


	//Ordeno de mayor a menor una copia del array para no perder el original
	$copia=$original;
	rsort($copia);
	//muestro solo la primera posicion
	echo "$copia[0]";
	echo "</td></tr>";
	echo "<tr><td>Menor	";
	//Ordeno de menor a mayor la copia para no perder el original
	sort($copia);
	//muestro solo la primera posicion
	echo $copia[0];
	echo "</td></tr>";
	echo "<tr><td>Vector Inverso	";
	$inverso = array_reverse($original); 

	for($i=0;$i<12;$i++)
	{
		echo "$inverso[$i] - ";
	}
	echo "</td></tr>";
	echo "<tr><td>Vector Ordenado	";

	//recorro el array copia que estaba ya ordenado
	for($i=0;$i<12;$i++)
	{
		echo "$copia[$i] - ";
	}
	echo "</td></tr>";	
	echo "<tr><td>Vector Pares	";
	for($i=0;$i<13;$i++)
	{
		if($original[$i]%2==0)
		{
			echo "$original[$i] - ";
		}
	}

	echo "</td></tr>";
	echo "<tr><td>Vector Impares	";
	
	for($i=0;$i<13;$i++)
	{
		if($original[$i]%2!=0)
		{
			echo "$original[$i] - ";
		}
	}
	echo "</td></tr>";
	echo "</table>";



 ?>