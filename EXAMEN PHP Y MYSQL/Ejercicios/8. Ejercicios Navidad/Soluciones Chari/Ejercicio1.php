<?php 

	//genero dos n�meros aleatorios
	$n1= mt_rand(1,50);
	$n2= mt_rand(1,50);
	//calculo la suma, resta, etc
	$suma = $n1+$n2;
	$resta = $n2-$n1;
	$producto = $n1*$n2;
	$division = $n2/$n1;

	
	//Genero la tabla
	echo "<table border='2'>";
	//Muestro el primer n�mero
	echo "<tr>";	
	echo "<td>Numero 1</td>";
	echo "<td>$n1</td>";
	echo "</tr>";
	//Muestro el segundo n�mero
	echo "<tr>";
	echo "<td>Numero 2</td>";
	echo "<td>$n2</td>";
	echo "</tr>";
	//Muestro los n�meros que hay entre el primero y el segundo
	echo "<tr>";
	echo "<td>Numeros entre $n1 y $n2</td>";

	echo "<td>";
	//Me aseguro de qu� n�mero es mayor y qu� n�mero es menor para mostrar bien
		if($n1<$n2)
		{
			for($i=$n1;$i<$n2;$i++)
			{
				echo "$i ";
			}
		}
		else
		{
			for($i=$n1;$i>$n2;$i--)
			{
				echo "$i ";
			}
		}
		echo "</td>";

	echo "</tr>";
	//Muestro la suma
	echo "<tr>";
	echo "<td> $n1 + $n2 </td>";
	echo "<td>$suma</td>";
	echo "</tr>";
	//Muestro la resta
	echo "<tr>";
	echo "<td> $n1 - $n2 </td>";
	echo "<td>$resta</td>";
	echo "</tr>";
	//Muestro el producto
	echo "<tr>";
	echo "<td> $n1 * $n2 </td>";
	echo "<td>$producto</td>";
	echo "</tr>";
	//Muestro la divisi�n
	echo "<tr>";
	echo "<td> $n1 / $n2 </td>";
	echo "<td>$division</td>";
	echo "<tr>";
	echo "</table>";

 ?>