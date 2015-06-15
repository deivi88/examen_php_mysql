<?php
	include("functions.php");
	session_start();
	$_SESSION = array();
	session_destroy();
	setcookie('acceso','cerrar sesion',-1,'/');
	header("refresh: 3, url=".BASEURL);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proyecto PHP</title>
	<link rel="stylesheet" href="<?php echo BASEURL;?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASEURL;?>css/icon.css">
	<link rel="stylesheet" href="<?php echo BASEURL;?>css/estilo.css">
</head>
<body>
	<section class="section_header">
		<div class="container-fluid text-center"><h2>CERRANDO SESIÓN...<h2></div>
	</section>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>
</body>
</html>