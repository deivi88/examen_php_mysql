<?php
	session_start();
	include("functions.php");
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
				header('Location:'.BASEURL.'');
			}
		}
		else{
			header('Location:'.BASEURL.'');
		}

	?>
	
	<section class="section_header">
		<div class="container-fluid text-center">
			<h2>NUEVO CLIENTE</h2>
		</div>
	</section>

	<?php
		clients_submenu(); 

		$link = connectBD();

		if(isset($_POST['newClientSend'])){
			$name = $_POST['name'];
			$last_name = $_POST['last_name'];
			$address = $_POST['address'];
			$phone1 = $_POST['phone1'];
			$phone2 = $_POST['phone2'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];

			$query = "INSERT INTO clientes VALUES (NULL, '$name', '$last_name', '$address', '$phone1', '$phone2', '$user', '$pass')";
			$result = mysqli_query($link, $query);
			if($result == true){
				echo '<h2 class="text-center">Cliente insertado correctamente</h2>';
				header("refresh:3;url=".BASEURL."inc/clients.php");
			}
			else{
				echo '<h2 class="text-center">Se ha producido un error al insertar en la base de datos</h2>';
			}
		}

		closeBD($link);
	?>
	
	<div class="container espaciado">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="#" method="post">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" maxlength="50" class="form-control" placeholder="Introduce el nombre..." required>
					</div>
					<div class="form-group">
						<label>Apellidos</label>
						<input type="text" name="last_name" maxlength="100" class="form-control" placeholder="Introduce los apellidos..." required>
					</div>
					<div class="form-group">
						<label>Dirección</label>
						<input type="text" name="address" maxlength="80" class="form-control" placeholder="Introduce la dirección..." required>
					</div>
					<div class="form-group">
						<label>Teléfono 1</label>
						<input type="tel" name="phone1" maxlength="9" class="form-control" placeholder="Introcuce el teléfono 1..." required>
					</div>
					<div class="form-group">
						<label>Teléfono 2</label>
						<input type="tel" name="phone2" maxlength="9" class="form-control" placeholder="Introduce el teléfono 2...">
					</div>
					<div class="form-group">
						<label>Usuario</label>
						<input type="text" name="user" class="form-control" placeholder="Introduce el nombre de usuario...">
					</div>
					<div class="form-group">
						<label>Contraseña</label>
						<input type="pass" name="pass" class="form-control" placeholder="Introduce la contraseña...">
					</div>
					<button type="submit" name="newClientSend" class="center-block btn btn-primary">Registrar</button>
				</form>
			</div>
		</div>
	</div>
	
	<?php footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>
</body>
</html>