<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 5 - Tema 8</title>

	<style>

		* {
			text-align: center;
			font-family: 'Open Sans', sans-serif;
			background: #007DFF;
			color: white;
		}

		#contenedor {
			width: 100%;
			margin: 0 auto;
		}

		#contenedor div {
			display: inline-block;
			width: 450px;
			margin: 10px 0;
		}

		table {
			width: 400px;
			margin: 0 auto;
		}

		th {
			background: #fff;
			width: 200px;
			height: 30px;
			color:black;
			box-shadow: 0 0 5px black;
			padding: 5px 0;
		}


		td {
			width: 200px;
			height: 30px;
			box-shadow: 0 0 5px black;
			padding: 5px 0;
			background: #FFA040;
		}

		input {
			background: #fff;
			color:black;
		}

		#seleccionado {
			background: red;
			color: black;
		}

	</style>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
<body>

	<h1>Indica que meses del calendario quieres mostrar</h1>

	<form action="#" method="post" name="fecha">
		
		<table>
			
			<tr>
				
				<td>Fecha</td><td><input type="date" name="fecha"></td>

			</tr>

			<tr>
				
				<td>Mostrar Mes Siguiente</td><td><input type="checkbox" name="mes_siguiente" value="si"></td>

			</tr>

			<tr>
				
				<td>Mostrar Mes Anterior</td><td><input type="checkbox" name="mes_anterior" value="si"></td>

			</tr>

			<tr>
				
				<td colspan="2"><input type="submit" name="enviar_datos" value="Enviar"></td>

			</tr>

		</table>

	</form>

	<div id="contenedor">

	<?php

		if(isset($_POST['enviar_datos']))
		{
			
			$fecha_usuario = $_POST['fecha'];
			$marca_fecha_usuario = strtotime($fecha_usuario);

			//DESGLOSE DE LA FECHA DADA POR EL USUARIO EN DIAS, MESES Y AÑOS
			$dia = date('j',$marca_fecha_usuario);
			$mes = date('n',$marca_fecha_usuario);
			$anio = date('Y',$marca_fecha_usuario);

			$nombre_mes = date('F',$marca_fecha_usuario);

			if(isset($_POST['mes_anterior'])) //SI SE HA SELECCIONADO LA CASILLA MES ANTERIOR.. HACER LO QUE HAYA DENTRO DE ESTE IF
			{

				echo "<div>";

				if($mes>1 && $mes<=12)
				{
					$restar_anterior = $mes - 1;

					$fecha_anterior = date("$anio-$restar_anterior-1");
					$marca_fecha_anterior = strtotime($fecha_anterior);

					//DESGLOSE DE LA FECHA DADA POR EL USUARIO EN DIAS, MESES Y AÑOS
					$dia_anterior = date('j',$marca_fecha_anterior);
					$mes_anterior = date('n',$marca_fecha_anterior);
					$anio_anterior = date('Y',$marca_fecha_anterior);

					$nombre_mes_anterior = date('F',$marca_fecha_anterior);


					echo "<br><br>

					<< MES ANTERIOR >> <h2>$nombre_mes_anterior $anio_anterior</h2>

					<table>

						<tr>";

						for($i=9;$i<=15;$i++)
						{

							$fecha = date("2015-02-$i");

							$marca_fecha = strtotime($fecha);

							$dia_semana = date('D',$marca_fecha);

							echo "<th>$dia_semana</th>";

						}

					echo "	</tr>";


					//NUMERO DE DIAS QUE TIENE EL MES DADO
					$ultimo_dia_mes_anterior = date('t',$marca_fecha_anterior);

					//DIA DE LA SEMANA DADO EN NUMERO.. EJEMPLO: LUNES = 1; MARTES=2 ... DOMINGO=7
					$marca_dia_semana_anterior = mktime(0,0,0,$mes_anterior,1,$anio_anterior);
					$dia_semana_numero_anterior = date('N',$marca_dia_semana_anterior);


					//SACAMOS EL NUMERO EL CUAL CORRESPONDERA A LA ULTIMA POSICION QUE SE RELLENARA CON EL ULTIMO DIA DEL MES
					$ultima_celda_anterior = $ultimo_dia_mes_anterior + $dia_semana_numero_anterior;

					echo "<tr>";

					for($i=1;$i<=42;$i++)
					{

						if($i==$dia_semana_numero_anterior)
						{
							$primer_dia_anterior = 1; //DECLARAMOS EN QUE POSICION DE $i SE ENCUENTRA EL DIA 1 DEL MES
						}

						if($i<$dia_semana_numero_anterior || $i>=$ultima_celda_anterior)
						{
							echo "<td></td>"; //DEJAR CELDAS VACIAS SI LA POSICION $i ES MENOR AL NUMERO DEL DIA DE LA SEMANA O SI LA POSICION $i ES MAYOR A LA ULTIMA CELDA
						}
						else
						{
							echo "<td>$primer_dia_anterior</td>"; //EL RESTO DE POSICIONES MOSTRAR EL NUMERO SIMPLE

							$primer_dia_anterior++;
						}

						if($i%7==0)
						{
							echo "</tr><tr>"; //CADA VEZ QUE $i SEA DIVISIBLE ENTRE 7 PEGAR UN SALTO DE LINEA
						}

					}

					echo "</tr>";

					echo "</table>

					";

				}

				if($mes==1)
				{
					$sumar_anterior = $mes + 11;

					$resta_anio = $anio - 1;

					$fecha_anterior = date("$resta_anio-$sumar_anterior-1");
					$marca_fecha_anterior = strtotime($fecha_anterior);

					//DESGLOSE DE LA FECHA DADA POR EL USUARIO EN DIAS, MESES Y AÑOS
					$dia_anterior = date('j',$marca_fecha_anterior);
					$mes_anterior = date('n',$marca_fecha_anterior);
					$anio_anterior = date('Y',$marca_fecha_anterior);

					$nombre_mes_anterior = date('F',$marca_fecha_anterior);


					echo "<br><br>

					<< MES ANTERIOR >> <h2>$nombre_mes_anterior $anio_anterior</h2>

					<table>

						<tr>";

						for($i=9;$i<=15;$i++)
						{

							$fecha = date("2015-02-$i");

							$marca_fecha = strtotime($fecha);

							$dia_semana = date('D',$marca_fecha);

							echo "<th>$dia_semana</th>";

						}

					echo "	</tr>";


					//NUMERO DE DIAS QUE TIENE EL MES DADO
					$ultimo_dia_mes_anterior = date('t',$marca_fecha_anterior);

					//DIA DE LA SEMANA DADO EN NUMERO.. EJEMPLO: LUNES = 1; MARTES=2 ... DOMINGO=7
					$marca_dia_semana_anterior = mktime(0,0,0,$mes_anterior,1,$anio_anterior);
					$dia_semana_numero_anterior = date('N',$marca_dia_semana_anterior);


					//SACAMOS EL NUMERO EL CUAL CORRESPONDERA A LA ULTIMA POSICION QUE SE RELLENARA CON EL ULTIMO DIA DEL MES
					$ultima_celda_anterior = $ultimo_dia_mes_anterior + $dia_semana_numero_anterior;

					echo "<tr>";

					for($i=1;$i<=42;$i++)
					{

						if($i==$dia_semana_numero_anterior)
						{
							$primer_dia_anterior = 1; //DECLARAMOS EN QUE POSICION DE $i SE ENCUENTRA EL DIA 1 DEL MES
						}

						if($i<$dia_semana_numero_anterior || $i>=$ultima_celda_anterior)
						{
							echo "<td></td>"; //DEJAR CELDAS VACIAS SI LA POSICION $i ES MENOR AL NUMERO DEL DIA DE LA SEMANA O SI LA POSICION $i ES MAYOR A LA ULTIMA CELDA
						}
						else
						{
							echo "<td>$primer_dia_anterior</td>"; //EL RESTO DE POSICIONES MOSTRAR EL NUMERO SIMPLE

							$primer_dia_anterior++;
						}

						if($i%7==0)
						{
							echo "</tr><tr>"; //CADA VEZ QUE $i SEA DIVISIBLE ENTRE 7 PEGAR UN SALTO DE LINEA
						}

					}

					echo "</tr>";

					echo "</table>

					";
				}

				echo "</div>";

			}

			echo "<div>

				<< MES ACTUAL >> <h2>$nombre_mes $anio</h2>

				<table>

					<tr>";

					for($i=9;$i<=15;$i++)
					{

						$fecha = date("2015-02-$i");

						$marca_fecha = strtotime($fecha);

						$dia_semana = date('D',$marca_fecha);

						echo "<th>$dia_semana</th>";

					}

			echo "	</tr>";


			//NUMERO DE DIAS QUE TIENE EL MES DADO
			$ultimo_dia_mes = date('t',$marca_fecha_usuario);

			//DIA DE LA SEMANA DADO EN NUMERO.. EJEMPLO: LUNES = 1; MARTES=2 ... DOMINGO=7
			$marca_dia_semana = mktime(0,0,0,$mes,1,$anio);
			$dia_semana_numero = date('N',$marca_dia_semana);


			//SACAMOS EL NUMERO EL CUAL CORRESPONDERA A LA ULTIMA POSICION QUE SE RELLENARA CON EL ULTIMO DIA DEL MES
			$ultima_celda = $ultimo_dia_mes+$dia_semana_numero;

			echo "<tr>";

			for($i=1;$i<=42;$i++)
			{

				if($i==$dia_semana_numero)
				{
					$primer_dia = 1; //DECLARAMOS EN QUE POSICION DE $i SE ENCUENTRA EL DIA 1 DEL MES
				}

				if($i<$dia_semana_numero || $i>=$ultima_celda)
				{
					echo "<td></td>"; //DEJAR CELDAS VACIAS SI LA POSICION $i ES MENOR AL NUMERO DEL DIA DE LA SEMANA O SI LA POSICION $i ES MAYOR A LA ULTIMA CELDA
				}
				else
				{
					if($dia==$primer_dia)
					{
						echo "<td id='seleccionado'>$primer_dia</td>"; //CUANDO LA POSICION DE $i COINCIDA CON EL DIA ELEGIDO POR EL USUARIO, COLOREARLO
					}
					else
					{
						echo "<td>$primer_dia</td>"; //EL RESTO DE POSICIONES MOSTRAR EL NUMERO SIMPLE
					}

					$primer_dia++;
				}

				if($i%7==0)
				{
					echo "</tr><tr>"; //CADA VEZ QUE $i SEA DIVISIBLE ENTRE 7 PEGAR UN SALTO DE LINEA
				}

			}

			echo "</tr>";

			echo "</table>

			</div>

			";

			if(isset($_POST['mes_siguiente'])) //SI SE HA SELECCIONADO LA CASILLA MES SIGUIENTE.. HACER LO QUE HAYA DENTRO DE ESTE IF
			{

				echo "<div>";

				if($mes>=1 && $mes<12)
				{
					$sumar_siguiente = $mes + 1;

					$fecha_siguiente = date("$anio-$sumar_siguiente-1");
					$marca_fecha_siguiente = strtotime($fecha_siguiente);

					//DESGLOSE DE LA FECHA DADA POR EL USUARIO EN DIAS, MESES Y AÑOS
					$dia_siguiente = date('j',$marca_fecha_siguiente);
					$mes_siguiente = date('n',$marca_fecha_siguiente);
					$anio_siguiente = date('Y',$marca_fecha_siguiente);

					$nombre_mes_siguiente = date('F',$marca_fecha_siguiente);


					echo "<br><br>

					<< MES SIGUIENTE >> <h2>$nombre_mes_siguiente $anio_siguiente</h2>

					<table>

						<tr>";

						for($i=9;$i<=15;$i++)
						{

							$fecha = date("2015-02-$i");

							$marca_fecha = strtotime($fecha);

							$dia_semana = date('D',$marca_fecha);

							echo "<th>$dia_semana</th>";

						}

					echo "	</tr>";


					//NUMERO DE DIAS QUE TIENE EL MES DADO
					$ultimo_dia_mes_siguiente = date('t',$marca_fecha_siguiente);

					//DIA DE LA SEMANA DADO EN NUMERO.. EJEMPLO: LUNES = 1; MARTES=2 ... DOMINGO=7
					$marca_dia_semana_siguiente = mktime(0,0,0,$mes_siguiente,1,$anio_siguiente);
					$dia_semana_numero_siguiente = date('N',$marca_dia_semana_siguiente);


					//SACAMOS EL NUMERO EL CUAL CORRESPONDERA A LA ULTIMA POSICION QUE SE RELLENARA CON EL ULTIMO DIA DEL MES
					$ultima_celda_siguiente = $ultimo_dia_mes_siguiente + $dia_semana_numero_siguiente;

					echo "<tr>";

					for($i=1;$i<=42;$i++)
					{

						if($i==$dia_semana_numero_siguiente)
						{
							$primer_dia_siguiente = 1; //DECLARAMOS EN QUE POSICION DE $i SE ENCUENTRA EL DIA 1 DEL MES
						}

						if($i<$dia_semana_numero_siguiente || $i>=$ultima_celda_siguiente)
						{
							echo "<td></td>"; //DEJAR CELDAS VACIAS SI LA POSICION $i ES MENOR AL NUMERO DEL DIA DE LA SEMANA O SI LA POSICION $i ES MAYOR A LA ULTIMA CELDA
						}
						else
						{
							echo "<td>$primer_dia_siguiente</td>"; //EL RESTO DE POSICIONES MOSTRAR EL NUMERO SIMPLE

							$primer_dia_siguiente++;
						}

						if($i%7==0)
						{
							echo "</tr><tr>"; //CADA VEZ QUE $i SEA DIVISIBLE ENTRE 7 PEGAR UN SALTO DE LINEA
						}

					}

					echo "</tr>";

					echo "</table>

					";
				}

				if($mes==12)
				{
					$restar_siguiente = $mes - 11;

					$sumar_anio = $anio + 1;

					$fecha_siguiente = date("$sumar_anio-$restar_siguiente-1");
					$marca_fecha_siguiente = strtotime($fecha_siguiente);

					//DESGLOSE DE LA FECHA DADA POR EL USUARIO EN DIAS, MESES Y AÑOS
					$dia_siguiente = date('j',$marca_fecha_siguiente);
					$mes_siguiente = date('n',$marca_fecha_siguiente);
					$anio_siguiente = date('Y',$marca_fecha_siguiente);

					$nombre_mes_siguiente = date('F',$marca_fecha_siguiente);


					echo "<br><br>

					<< MES SIGUIENTE >> <h2>$nombre_mes_siguiente $anio_siguiente</h2>

					<table>

						<tr>";

						for($i=9;$i<=15;$i++)
						{

							$fecha = date("2015-02-$i");

							$marca_fecha = strtotime($fecha);

							$dia_semana = date('D',$marca_fecha);

							echo "<th>$dia_semana</th>";

						}

					echo "	</tr>";


					//NUMERO DE DIAS QUE TIENE EL MES DADO
					$ultimo_dia_mes_siguiente = date('t',$marca_fecha_siguiente);

					//DIA DE LA SEMANA DADO EN NUMERO.. EJEMPLO: LUNES = 1; MARTES=2 ... DOMINGO=7
					$marca_dia_semana_siguiente = mktime(0,0,0,$mes_siguiente,1,$anio_siguiente);
					$dia_semana_numero_siguiente = date('N',$marca_dia_semana_siguiente);


					//SACAMOS EL NUMERO EL CUAL CORRESPONDERA A LA ULTIMA POSICION QUE SE RELLENARA CON EL ULTIMO DIA DEL MES
					$ultima_celda_siguiente = $ultimo_dia_mes_siguiente + $dia_semana_numero_siguiente;

					echo "<tr>";

					for($i=1;$i<=42;$i++)
					{

						if($i==$dia_semana_numero_siguiente)
						{
							$primer_dia_siguiente = 1; //DECLARAMOS EN QUE POSICION DE $i SE ENCUENTRA EL DIA 1 DEL MES
						}

						if($i<$dia_semana_numero_siguiente || $i>=$ultima_celda_siguiente)
						{
							echo "<td></td>"; //DEJAR CELDAS VACIAS SI LA POSICION $i ES MENOR AL NUMERO DEL DIA DE LA SEMANA O SI LA POSICION $i ES MAYOR A LA ULTIMA CELDA
						}
						else
						{
							echo "<td>$primer_dia_siguiente</td>"; //EL RESTO DE POSICIONES MOSTRAR EL NUMERO SIMPLE

							$primer_dia_siguiente++;
						}

						if($i%7==0)
						{
							echo "</tr><tr>"; //CADA VEZ QUE $i SEA DIVISIBLE ENTRE 7 PEGAR UN SALTO DE LINEA
						}

					}

					echo "</tr>";

					echo "</table>

					</div>

					";

				}

			}

		}

	?>

	</div>
	
</body>
</html>