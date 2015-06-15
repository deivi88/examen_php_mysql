<?php 

	$ochos=0;
	for ($i=0; $i<50; $i++)
	{
		//genero numero aleatorio a la vez que lo meto en el array
		$a[$i]=mt_rand(0,20);
		//Compruebo si el número generado es un 8
		if($a[$i]==8)
		{
			$ochos++;
		}
		//Muestro el valor generado
		echo "$a[$i]  ";
	}
	
	echo "<br>Numero de 8 = $ochos";
 ?>
