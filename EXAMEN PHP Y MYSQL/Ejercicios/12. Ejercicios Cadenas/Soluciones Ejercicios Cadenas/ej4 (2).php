<?php 

	$array = array("agua","azul","aguacero","azucena","romero");

	echo "<table border='1'><tr><td></td>";
	for($i=0; $i<count($array); $i++)
	{
		echo "<td> $array[$i]</td>";
	}
	echo "</tr>";
	for($i=0;$i<count($array);$i++)
	{
			echo "<tr><td>$array[$i]</td>";
			for($j=0; $j<count($array); $j++)
			{
				if(strncmp($array[$i], $array[$j], 3)==0)

				{
					echo "<td style='background:green'>Verde</td>";
				}
				else
				{
					echo "<td style='background:red'>Rojo</td>";
				}
			}
			echo "</tr>";
		
	}
	echo "</table>";

 ?>