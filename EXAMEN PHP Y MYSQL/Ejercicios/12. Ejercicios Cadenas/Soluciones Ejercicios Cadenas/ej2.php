<?php 

	$array = array('co$a','Ce','@rroba','alvaro','barr/a');

	echo "<table border='1'>";
	for($i=0;$i<count($array);$i++)
	{
		echo '<tr>';
		if(preg_match('/\$/', $array[$i]))
		{
			echo '<td>'.$array[$i].'</td><td>Se encontró caracter</td>';
		}
		elseif(preg_match('/C/', $array[$i]))
		{
			echo '<td>'.$array[$i].'</td><td>Se encontró caracter</td>';
		}
		elseif(preg_match('/\@/', $array[$i]))
		{
			echo '<td>'.$array[$i].'</td><td>Se encontró caracter</td>';
		}
		elseif(preg_match('/\//', $array[$i]))
		{
			echo '<td>'.$array[$i].'</td><td>Se encontró caracter</td>';
		}
		else
		{
			echo '<td>'.$array[$i].'</td><td> No se encontró caracter</td>';
		}
		echo '</tr>';
	}
	echo '</table>';

 ?>