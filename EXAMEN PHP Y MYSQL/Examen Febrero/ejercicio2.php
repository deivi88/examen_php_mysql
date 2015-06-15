<html>
	<head>
		<title>Ejercicio 2</title>
	</head>
	<body>
		<?php
			$cadena = $_POST['cadena'];
			$case = $_POST['case'];
			$l1 = $_POST['l1'];
			$l2 = $_POST['l2'];
			$l3 = $_POST['l3'];
			$l4 = $_POST['l4'];
			$l5 = $_POST['l5'];
			$longitud = strlen($cadena);
			
			echo "<table border>";
			echo "<tr><td>Cadena</td>";
			if($cadena != ""){
				echo "<td>$cadena</td></tr>";
				echo "<tr><td>Longitud</td><td>$longitud</td></tr>";
				if($case=='si'){
					if($l1!=""){
						$porcentajel1 = (substr_count($cadena, $l1)*100)/$longitud;
						echo "<tr><td>Letra <b>$l1</b></td><td>$porcentajel1%</td></tr>";
					}
					if($l2!=""){
						$porcentajel2 = (substr_count($cadena, $l2)*100)/$longitud;
						echo "<tr><td>Letra <b>$l2</b></td><td>$porcentajel2%</td></tr>";
					}
					if($l3!=""){
						$porcentajel3 = (substr_count($cadena, $l3)*100)/$longitud;
						echo "<tr><td>Letra <b>$l3</b></td><td>$porcentajel3%</td></tr>";
					}
					if($l4!=""){
						$porcentajel4 = (substr_count($cadena, $l4)*100)/$longitud;
						echo "<tr><td>Letra <b>$l4</b></td><td>$porcentajel4%</td></tr>";
					}
					if($l5!=""){
						$porcentajel5 = (substr_count($cadena, $l5)*100)/$longitud;
						echo "<tr><td>Letra <b>$l5</b></td><td>$porcentajel5%</td></tr>";
					}
				}
				elseif($case=='no'){
					$cadena = strtolower($cadena);
					if($l1!=""){
						$l1min = strtolower($l1);
						$porcentajel1 = (substr_count($cadena, $l1min)*100)/$longitud;
						echo "<tr><td>Letra <b>$l1</b></td><td>$porcentajel1%</td></tr>";
					}
					if($l2!=""){
						$l2min = strtolower($l2);
						$porcentajel2 = (substr_count($cadena, $l2min)*100)/$longitud;
						echo "<tr><td>Letra <b>$l2</b></td><td>$porcentajel2%</td></tr>";
					}
					if($l3!=""){
						$l3min = strtolower($l3);
						$porcentajel3 = (substr_count($cadena, $l3min)*100)/$longitud;
						echo "<tr><td>Letra <b>$l3</b></td><td>$porcentajel3%</td></tr>";
					}
					if($l4!=""){
						$l4min = strtolower($l4);
						$porcentajel4 = (substr_count($cadena, $l4min)*100)/$longitud;
						echo "<tr><td>Letra <b>$l4</b></td><td>$porcentajel4%</td></tr>";
					}
					if($l5!=""){
						$l5min = strtolower($l5);
						$porcentajel5 = (substr_count($cadena, $l5min)*100)/$longitud;
						echo "<tr><td>Letra <b>$l5</b></td><td>$porcentajel5%</td></tr>";
					}
				}

			}
			else{
				echo "<td>Error: No se ha introducido la cadena</td></tr>";
			}
			echo "</table>";
		?>
	</body>
</html>