<?php 

	$a[0]['nombre']='Pepe';
	$a[0]['peso']=4.5;
	$a[0]['color']='Marron';
	$a[0]['edad']=12;
	
	$a[1]['nombre']='Sparky';
	$a[1]['peso']=3;
	$a[1]['color']='Blanco';
	$a[1]['edad']=2;
	
	$a[2]['nombre']='Tobby';
	$a[2]['peso']=7.2;
	$a[2]['color']='Beige';
	$a[2]['edad']=8;
	
	$a[3]['nombre']='Bigotes';
	$a[3]['peso']=4;
	$a[3]['color']='Negro';
	$a[3]['edad']=9;
	
	$a[4]['nombre']='Ricky';	
	$a[4]['peso']=0.1;	
	$a[4]['color']='Verde';	
	$a[4]['edad']=2;

	// ----------- Apartado (i) Mostrar todas las mascotas que tiene el usuario -------
	echo "<table border='1'>";
	//Muestro la primera fila de la tabla
	echo "<tr><td> Fila </td><td> Nombre </td><td> Peso </td><td> Color </td><td> Edad </td></tr>";
	//bucle para recorrer el array posicional (filas)
	for($i=0;$i<=4;$i++)
	{
		echo "<tr><td>$i</td>";
		//Bucle para recorrer el array asociativo (columnas)
		foreach($a[$i] as $b)
		{
			echo "<td>$b</td>";
		}
		echo "</tr>";
	}
	echo "</table>";



	
	// ----------- Apartado (ii) Mostrar peso de mascota codigo "3" 

	echo "<br><br> Peso mascota con codigo 3 = ".$a[3]['peso'];

	// ----------- Apartado (iii) Mostrar color mascota Sparky 

	echo "<br><br> Color nombre Sparky = ".$a[1]['color'];

	// ----------- Apartado (iv)Mostrar Datos de mayor 

	echo "<br><br>";
	
	//tomo la primera mascota como si fuera la mayor
	$posi_mayor=0;
	//almaceno la edad de la primera mascota como si fuera la mayor
	$edad_mayor=$a[0]['edad'];
	
	//Recorro todo el array para ir comprobando si hay mascotas mayores
	
	for($i=1; $i<5; $i++)
	{
		//si encuentro una edad mayor a la almacenada, cambio los datos
		if($a[$i]['edad']>$edad_mayor)
		{
			$posi_mayor=$i;
			$edad_mayor=$a[$i]['edad'];
		}
	}
	
	
	echo "La mascota mayor es:";
	echo "<br> Nombre: ".$a[$posi_mayor]['nombre'];
	echo "<br> Peso: ".$a[$posi_mayor]['peso'];
	echo "<br> Color: ".$a[$posi_mayor]['color'];
	echo "<br> Edad: ".$a[$posi_mayor]['edad'];

	// ----------- Apartado (v) Mostrar nombre de la mascota que pesa menos

	echo "<br><br>";
	
	//tomo la primera mascota como si fuera la que pesa menos
	$nombre_pesa_menos=$a[0]['nombre'];
	//almaceno el peso de la primera mascota como si fuera la que pesa menos
	$peso_menor=$a[0]['peso'];
	
	//Recorro todo el array para ir comprobando si hay mascotas que pesen menos
	
	for($i=1; $i<5; $i++)
	{
		//si encuentro peso menor al almacenado, cambio los datos
		if($a[$i]['peso']<$peso_menor)
		{
			$nombre_pesa_menos=$a[$i]['nombre'];
			$peso_menor=$a[$i]['peso'];
		}
	}
	
	
	echo "La mascota que pesa menos es:";
	echo "<br> Nombre: $nombre_pesa_menos";
	echo "<br> Peso: $peso_menor";

 ?>