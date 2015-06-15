<html>
<head>
	<title> Ejercicio 4 </title>
</head>
<body>
	<?php
		//primero compruebo que haya introducido 3 numeros
		if($_GET['n1'] && $_GET['n2'] && $_GET['n3'] )
		{
			$n1 = $_GET['n1'];
			$n2 = $_GET['n2'];
			$n3 = $_GET['n3'];
			
			if($n1<$n2 && $n1<$n3)
			{
				echo "$n1 < ";
				if ($n2<$n3)
				{
					echo "$n2 < $n3";
				}
				else
				{
					echo "$n3 < $n2";
				}
			}
			elseif($n2<$n1 && $n2<$n3)
			{
				echo "$n2 < ";
				if ($n1<$n3)
				{
					echo "$n1 < $n3";
				}
				else
				{
					echo "$n3 < $n1";
				}
			}
			else
			{
				echo "$n3 < ";
				if ($n2<$n1)
				{
					echo "$n2 < $n1";
				}
				else
				{
					echo "$n1 < $n2";
				}
			}
			
			
		}
		else
		{
			echo "Falta algun numero por introducir";
		}
	
	?>
</body>
</html>