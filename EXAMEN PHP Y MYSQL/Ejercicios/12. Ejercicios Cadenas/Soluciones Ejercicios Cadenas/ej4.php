<head>
	<body>
	<?php
		$palabras=array('agua', 'azul', 'aguacero', 'azucena', 'romero');

		echo "<table border> <tr> <td> </td>";
		for($i=0; $i<count($palabras); $i++)
		{
			echo "<td> $palabras[$i] </td>";
		}
		echo "</tr>";


		//recorro el array para ir comparando
		for($i=0; $i<count($palabras); $i++)
		{
			echo "<tr> <td> $palabras[$i]</td>";
			//vuelvo a recorrer para ir comparando
			for($t=0; $t<count($palabras); $t++)
			{
				if(strncmp($palabras[$i], $palabras[$t],3)==0)
				{	//si son iguales la celda irá verde
					echo "<td bgcolor='green'>  </td>";
				}
				else
				{	//si no son iguales la celda irá roja
					echo "<td bgcolor='red'>  </td>";
				}
			}
			echo "</tr>";

		}
		echo "</table>";



	?>

	</body>
</head>