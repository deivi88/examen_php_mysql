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
			<h2>NUEVO TRABAJO</h2>
		</div>
	</section>

	<?php 

		if(isset($_SESSION['id_usuario'])){
			$user_id = $_SESSION['id_usuario'];

			if($user_id == 1){
				works_submenu_admin();
			}
			else{
				works_submenu_client();
			}
		}
		else{
			works_submenu_client();
		}

		$today = date('Y-m-d');
		$link = connectBD();
		$query_name_client = "SELECT id, nombre, apellidos FROM clientes";
		$result_name_client = mysqli_query($link,$query_name_client);
		$num_records = mysqli_affected_rows($link);

		if(isset($_POST['newWorksSend'])){
			$dateWorks = $_POST['dateWorks'];
			$titleWorks = $_POST['titleWorks'];
			$contentWorks = $_POST['contentWorks'];
			$id_cliente = $_POST['name_client'];
			$dateDeliveryWorks = $_POST['dateDeliveryWorks'];
			$state = 'F';

			if($_FILES['imageWorks']['tmp_name']!=''){
				$temporary_image_name = $_FILES['imageWorks']['tmp_name'];
				$original_image_name = $_FILES['imageWorks']['name'];
				$image_size = $_FILES['imageWorks']['size'];
				$image_file_format = $_FILES['imageWorks']['type'];

				$megabytes=2*1024*1024;

				

				if(strlen($original_image_name)>30){
					echo '<h2 class="text-center">El nombre del archivo no puede ser mayor de 30 caracteres</h2>';
					header("refresh:3;url=".BASEURL."inc/new_works.php");
					exit;
				}

				if($image_file_format == 'image/jpeg' or $image_file_format == 'image/png' or $image_file_format == 'image/gif' or $image_file_format == 'image/bmp' or $image_file_format == 'image/tiff'){
					if($image_size > $megabytes){
						echo "La imagen no puede ser mayor de 2 MB";
						exit();
					}
					if(!file_exists("../img/trabajos")){
						mkdir("../img/trabajos");
					}
					$pathname = "../img/trabajos/$original_image_name";
					move_uploaded_file($temporary_image_name, $pathname);


					$query = "INSERT INTO trabajos VALUES (NULL, '$titleWorks', '$contentWorks', '$dateWorks', '$id_cliente', '$original_image_name', '$state', '$dateDeliveryWorks')";
					$result = mysqli_query($link, $query);
					if($result == true){
						echo '<h2 class="text-center">Trabajo insertado correctamente</h2>';
						header("refresh:3;url=".BASEURL."inc/works.php");
					}
					else{
						echo "Se ha producido un error al insertar en la base de datos error1";
					}
				}else{

					//si el tipo del archivo no es ninguno de tipo imagen muestro un error
					echo '<h2 class="text-center">El archivo subido debe ser una imagen</h2>';
					header("refresh:3;url=".BASEURL."inc/new_works.php");
					//termino el script
					exit();
				}
				closeBD($link);
			}
			else{
				$query = "INSERT INTO trabajos VALUES (NULL, '$titleWorks', '$contentWorks', '$dateWorks', '$id_cliente', NULL, '$state', '$dateDeliveryWorks')";
				$result = mysqli_query($link, $query);
				if($result == true){
					echo '<h2 class="text-center">Trabajo insertado correctamente</h2>';
					header("refresh:3;url=".BASEURL."inc/works.php");
				}
				else{
					echo "Se ha producido un error al insertar en la base de datos";
				}
				closeBD($link);
			}
		}
		
		
	?>
	
	<div class="container espaciado">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Fecha de realización</label>
						<input type="date" name="dateWorks" class="form-control" value="<?php echo $today; ?>" required>
					</div>
					<div class="form-group">
						<label>Título</label>
						<input type="text" name="titleWorks" maxlength="60" class="form-control" id="name" placeholder="Introduce el título..." required>
					</div>
					<div class="form-group">
						<label>Fecha de entrega</label>
						<input type="date" name="dateDeliveryWorks" class="form-control" value="<?php echo $today; ?>" required>
					</div>
					<div class="form-group">
						<label>Descripción</label>
						<textarea class="form-control" name="contentWorks" maxlength="1000" rows="3" placeholder="Introduce la descripción..." required></textarea>
					</div>
					<div class="form-group">
						<label for="name">Nombre del cliente</label>
						<select class="form-control" name="name_client">
							<?php 
								if($num_records == 0){
									echo '<option disabled>No hay clientes disponibles</option>';
								}else{
									while($row=mysqli_fetch_array($result_name_client)){
										echo '<option value="'.$row['id'].'">'.$row['nombre'].' '.$row['apellidos'].'</option>';
									}
								}
								
								
							 ?>
  							
						</select>
					</div>
					<div class="form-group">
						<label>Imagen del trabajo</label>
						<input type="file" name="imageWorks" class="imagenNoticia">
						<p class="help-block">El tamaño de la imagen no puede ser mayor a 2 MB.</p>
					</div>
					<button type="submit" name="newWorksSend" class="center-block btn btn-primary">Registrar</button>
				</form>
			</div>
		</div>
	</div> 

	?>
	
	<?php footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>
</body>
</html>