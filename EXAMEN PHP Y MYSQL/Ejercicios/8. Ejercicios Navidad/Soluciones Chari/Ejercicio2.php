<?php 
	
	//Creo numero aleatorio
	$n1= mt_rand(1,5);

	//compruebo su valor
	switch($n1)
	{
		case 1:
				echo 'Hola, buenos dias';
				break;
		case 2:
				echo 'Que tal estas?';
				break;
		case 3:
				echo "Hora de cerrar";
				break;
		case 4:
				echo "Me voy ya";
				break;
		default:
				echo "Adios";
	}

 ?>