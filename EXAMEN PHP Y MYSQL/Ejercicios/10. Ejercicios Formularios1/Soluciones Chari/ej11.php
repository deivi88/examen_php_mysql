<html>
<head>
	<title> Ejercicio 11 </title>
</head>
<body>
	<?php
		//primero compruebo que haya introducido 10 numeros
		if($_POST['n1'] && $_POST['n2']&& $_POST['n3']&& $_POST['n4'] && $_POST['n5']&& $_POST['n6']&& $_POST['n7']&& $_POST['n8']&& $_POST['n9']&& $_POST['n10'])
		{
			//creo un array con los 10 números 
			$n = array ($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'], $_POST['n6'], $_POST['n7'], $_POST['n8'], $_POST['n9'], $_POST['n10']);
			$suma=0;
			$mayor=$n[0];
			$menor=$n[0];
			$media=0;
			
			echo "<table border>";
			echo "<tr><td> Array completo </td> <td> ";
			for($i=0; $i<10; $i++)
			{
				$suma+=$n[$i];
				if($n[$i]<$menor)
				{
					$menor=$n[$i];
				}
				if($n[$i]>$mayor)
				{
					$mayor=$n[$i];
				}
				echo " $n[$i] ";
			}
			echo "</td></tr>";
			echo "<tr><td> Valor mayor </td> <td> $mayor </td></tr>";
			echo "<tr><td> Valor menor </td> <td> $menor </td></tr>";
			$media=$suma/10;
			echo "<tr><td> Media </td> <td> $media </td></tr>";
			echo "<tr><td> Suma </td> <td> $suma </td></tr>";
			echo "</table>";
			
			
		}
		else
		{
			echo "Falta algun numero por introducir";
		}
	
	?>
</body>
</html>