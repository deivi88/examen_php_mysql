<?php 

	for ($i=0; $i<100; $i++)
	{
		//Genero un número aleatorio y lo meto en un array
		$a[$i]=mt_rand(0,20);
		//compruebo si el número generado es par y si lo es lo muestro
		if($a[$i]%2==0)
		{
			echo "$a[$i]  ";
		}
		
	}

	

 ?>