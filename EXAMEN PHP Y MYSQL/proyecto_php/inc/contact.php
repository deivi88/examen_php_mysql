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
				<h2 class="text-center">Contáctenos</h2>
			</div>
			<div class="fcontacto">
				<form method="post" name="fcontacto" id="fcontacto" action=mailto:'davidredondoperez@gmail.com'>
					<div class="row">
						<div class="col-md-6">
							<label>Tu nombre:</label>
							<input type="text" name="name" id="name" class="form-control">
						</div>

						<div class="col-md-6">
							<label>Tu Email:</label>
							<input type="text" name="email" id="email" class="form-control">
						</div>
					</div>
					<label>Asunto:</label>
					<input type="text" name="asunto" id="asunto" class="form-control">
					<label>Tu Mensaje:</label>
					<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
					<div class="text-center">
						<input type="submit" class="btn btn-info" value="Enviar">
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