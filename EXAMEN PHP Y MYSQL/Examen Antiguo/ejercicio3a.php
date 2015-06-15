<?php 
	session_start();
	$nombre = $_POST['nombre'];
	$ciudad = $_POST['ciudad'];
	$color = $_POST['color'];

	$_SESSION['nombre'] = $nombre;
	$_SESSION['ciudad'] = $ciudad;
	if($color=='rojo'){
		$_SESSION['color']='red';
	}elseif($color=='azul'){
		$_SESSION['color']='blue';
	}elseif($color=='verde'){
		$_SESSION['color']='green';
	}

	$datos = session_encode();
	setcookie('sesion',$datos);

?>