<html>
<head>
</head>
<body>
	<form name='ej4' action='#' method='post' enctype='multipart/form-data'>
	
		Nombre: <input type='text' name='nom'>
		<br>		
		Apellidos: <input type='text' name='ape'>
		<br>
		Curso: <input type='text' name='cur'>
		<br>
		Nota 1: 
		<select name='n1'>
			<option value=0 selected> 0 </option>
			<option value=1> 1 </option>
			<option value=2> 2 </option>
			<option value=3> 3 </option>
			<option value=4> 4 </option>
			<option value=5> 5 </option>
			<option value=6> 6 </option>
			<option value=7> 7 </option>
			<option value=8> 8 </option>
			<option value=9> 9 </option>
			<option value=10> 10 </option>
		</select>
		<br>
		Nota 2: 
		<select name='n2'>
			<option value=0 selected> 0 </option>
			<option value=1> 1 </option>
			<option value=2> 2 </option>
			<option value=3> 3 </option>
			<option value=4> 4 </option>
			<option value=5> 5 </option>
			<option value=6> 6 </option>
			<option value=7> 7 </option>
			<option value=8> 8 </option>
			<option value=9> 9 </option>
			<option value=10> 10 </option>
		</select>
		<br>
		Nota 3: 
		<select name='n3'>
			<option value=0 selected> 0 </option>
			<option value=1> 1 </option>
			<option value=2> 2 </option>
			<option value=3> 3 </option>
			<option value=4> 4 </option>
			<option value=5> 5 </option>
			<option value=6> 6 </option>
			<option value=7> 7 </option>
			<option value=8> 8 </option>
			<option value=9> 9 </option>
			<option value=10> 10 </option>
		</select>
		<br>
		
		<input type='submit' name='enviar'>
	</form>

	<?php
		//si se ha pulsado el botón enviar
		if(isset($_POST['enviar']))
		{
			//cojo todos los datos aportados por el usuario
			$nom = $_POST['nom'];
			$ape = $_POST['ape'];
			$cur = $_POST['cur'];
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			$n3 = $_POST['n3'];
			
			//Calculo la media
			$media=($n1+$n2+$n3)/3;
			
			//muestro el boletín
			echo "<table border>";
			echo "<tr><td> Nombre y apellidos </td><td> $nom $ape </td></tr>";
			echo "<tr><td> Curso </td><td> $cur </td></tr>";
			echo "<tr><td> Nota 1 </td><td> $n1 </td></tr>";
			echo "<tr><td> Nota 2 </td><td> $n2 </td></tr>";
			echo "<tr><td> Nota 3 </td><td> $n3 </td></tr>";
			echo "<tr><td> Media </td><td> $media </td></tr>";
			echo "</table>";
		}
	
	?>
	
	
	
</body>
</html>