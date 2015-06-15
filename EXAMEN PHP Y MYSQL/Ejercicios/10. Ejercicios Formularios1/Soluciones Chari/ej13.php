<html>
<head>
	<title> Ejercicio 13 </title>
</head>
<?php
		//creo el array con las soluciones correctas
		$correctas = array ['a', 'c','b'];
		//No hace falta comprobar los datos y creo un array con las respuestas dadas
		$alumno = array ($_POST('p1'),$_POST('p2'),$_POST('p3'));
		
		//Con un bucle recorro los dos arrays para ver si las respuestas son iguales.
		
		$n_correctas=0;
		
		for($i=0; $i<3; $i++)
		{
			if($correctas[$i]==$alumno[$i])
			{
				$n_correctas++;
			}
		}
		echo "Has acertado $n_correctas preguntas";
		
	?>
</body>
</html>