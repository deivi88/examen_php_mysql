<?php
	include("functions.php");

	$link = connectBD();

	if(isset($_POST['Enviar'])){
		$user_name = $_POST['user_name'];
		$pass = $_POST['pass'];
		$remember = $_POST['remember'];
		
		$query_user = "SELECT nombre_usuario, pass FROM clientes WHERE nombre_usuario = '$user_name' AND pass = '$pass'";
		$user = mysqli_query($link, $query_user);
		$num_users = mysqli_affected_rows($link);

		if($num_users == 1){
			$query_client_id = "SELECT id, nombre_usuario FROM clientes WHERE nombre_usuario = '$user_name'";
			$client_id = mysqli_query($link, $query_client_id);
			$num_client_id = mysqli_fetch_array($client_id);

			session_start();

			$_SESSION['id_usuario'] = $num_client_id['id'];
			$_SESSION['nombre_usuario'] = $num_client_id['nombre_usuario'];

			$datos_cookie = session_encode();

			if($remember == "si"){
				setcookie("acceso",$datos_cookie,time()+365*24*60*60,'/');
			}
			else{
				setcookie("acceso",$datos_cookie,0,'/');
			}
			header('Location:'.BASEURL.'inc/works.php');

		}else{
			echo '<h2 class="text-center" style="margin-top:45px; color:red";>El usuario no existe</h2>';
		}
	}

	if(isset($_COOKIE['acceso']) && $_COOKIE['acceso'] !='cerrar sesion'){
		header('Location:'.BASEURL.'inc/works.php');
	}
	else{



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
	
	<?php 
	if(isset($_SESSION['id_usuario'])){
			$user_id = $_SESSION['id_usuario'];

			if($user_id == 1){
				create_header_admin();
			}
			else{
				create_header_client();
			}
		}
		else{
			create_header_user();
		} 
	?>

	<section class="section_header">
		<div class="container-fluid text-center">
			<h2>CONTACTO</h2>
		</div>
	</section>

	<section>
		<div class="form_contact">
			<div class="style_form_contact">
				<h2 class="text-center">Acceder</h2>
			</div>
			<div class="fcontacto">
				<form method="post" name="fcontacto" id="fcontacto" action='#'>
					<div class="row">
						<div class="col-md-6">
							<label>Nombre de usuario</label>
							<input type="text" name="user_name" id="user_name" class="form-control">
						</div>

						<div class="col-md-6">
							<label>Contraseña</label>
							<input type="password" name="pass" id="pass" class="form-control">
						</div>
						<div class="col-md-12">
							<input type="checkbox" name="remember" value="si"> Recordar usuario y contraseña
						</div>
					</div>
					<div class="text-center">
						<input type="submit" name="Enviar" class="btn btn-info" value="Enviar">
					</div>
				</form>
			</div>
		</div>
	</section>
	
	<?php footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>
</body>
</html>

<?php
	}
	closeBD($link);
?>