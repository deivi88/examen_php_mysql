<?php 

	$array = array('hola','me','llamo','alvaro','parras');


	echo "<table border='1'>";
	for($i=0;$i<count($array);$i++)
	{
		echo "<tr>";
		if(preg_match("/p/", $array[$i]))
		{
			echo "<td>".$array[$i]."</td><td> Sí tiene una 'p'</td>";
		}
		else
		{
			echo "<td>".$array[$i]."</td><td> No tiene una 'p'</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
 ?>