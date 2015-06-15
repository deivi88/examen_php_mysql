<html>
	<head>
		<title>Ejercicio 3</title>
	</head>
	<body>
		<?php
			function modificarCadena($cad, $letra, $numero){
				$longitud=strlen($cad);
				for($i = $longitud; $i<=$numero+$longitud-1; $i++){
					$cad = $cad . $letra;
				}
				return $cad;
			}
		?>
	</body>
</html>