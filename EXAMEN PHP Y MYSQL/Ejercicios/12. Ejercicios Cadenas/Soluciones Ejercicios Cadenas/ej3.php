<?php 

	$cadena = "rellene";

	echo "Cadena sin modificar : $cadena";

	$cadena1 = str_pad($cadena, strlen($cadena)+5,"-",STR_PAD_LEFT);
	$cadena2 = str_pad($cadena1, strlen($cadena1)+3,",",STR_PAD_RIGHT);

	//echo "<br>origial = $cadena";
	echo "<br>modificada = $cadena2";


 ?>