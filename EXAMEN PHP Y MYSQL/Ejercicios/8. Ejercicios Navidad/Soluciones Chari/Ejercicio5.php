<?php 

	$negativos=0;
	
	//Bucle para recorrer las filas
	for($i=0; $i<3; $i++)
	{
		//Bucle para recorrer las columnas dentro de cada fila
		for($j=0; $j<5; $j++)
		{	//Genero número aletorio y lo guardo en la posición que le toca
			$m[$i][$j]=mt_rand(-100, 100);
			//compruebo si el número generado es negativo
			if($m[$i][$j]<0) 
			{
				$negativos++;
			}
		}
	}
			
	//Empiezo la tabla para mostrarla
	echo "<table border ='2'>";

	//Bucle para recorrer las filas
	for($i=0;$i<3;$i++)
	{
		//Empiezo una fila
		echo "<tr>";
			//Bucle para recorrer las columnas dentro de cada fila
			for($j=0;$j<5;$j++)
			{
				//Dentro de cada columna voy escribiendo el valor correspondiente de la matriz
				echo "<td>".$m[$i][$j]."</td>";

			}
		echo "</tr>";
	}

	echo "</table>";
	echo "<br><br>";
	
	echo "<br>Numero de negativos encontrados = $negativos";

 ?>