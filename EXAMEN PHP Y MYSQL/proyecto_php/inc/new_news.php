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
			<h2>NUEVA NOTICIA</h2>
		</div>
	</section>

	<?php
		if(isset($_SESSION['id_usuario'])){
			$user_id = $_SESSION['id_usuario'];

			if($user_id == 1){
				news_submenu_admin();
			}
			else{
				news_submenu_user();
			}
		}
		else{
			news_submenu_user();
		}
		 
		$today = date('Y-m-d');

		if(isset($_POST['newNewsSend'])){
			$dateNews = $_POST['dateNews'];
			$titleNews = $_POST['titleNews'];
			$contentNews = $_POST['contentNews'];

			$temporary_image_name = $_FILES['imageNews']['tmp_name'];
			$original_image_name = $_FILES['imageNews']['name'];
			$image_size = $_FILES['imageNews']['size'];
			$image_file_format = $_FILES['imageNews']['type'];

			$megabytes=2*1024*1024;

			if($image_size > $megabytes){
				echo "La imagen no puede ser mayor de 2 MB";
				exit();
			}

			if(strlen($original_image_name)>30){
				echo '<h2 class="text-center">El nombre del archivo no puede ser mayor de 30 caracteres</h2>';
				header("refresh:3;url=".BASEURL."inc/new_news.php");
				exit;
			}

			if($image_file_format == 'image/jpeg' or $image_file_format == 'image/png' or $image_file_format == 'image/gif' or $image_file_format == 'image/bmp' or $image_file_format == 'image/tiff'){
				if(!file_exists("../img/noticias")){
					mkdir("../img/noticias");
				}
				$pathname = "../img/noticias/$original_image_name";
				move_uploaded_file($temporary_image_name, $pathname);

				$link = connectBD();

				$query = "INSERT INTO noticias VALUES (NULL, '$titleNews', '$contentNews', '$original_image_name', '$dateNews')";
				$result = mysqli_query($link, $query);
				if($result == true){
					echo '<h2 class="text-center">Noticia insertada correctamente</h2>';
					header("refresh:3;url=".BASEURL."inc/news.php");
				}
				else{
					echo '<h2 class="text-center">Se ha producido un error al insertar en la base de datos</h2>';
				}
			}else{

				//si el tipo del archivo no es ninguno de tipo imagen muestro un error
				echo '<h2 class="text-center">El archivo subido debe ser una imagen</h2>';
				header("refresh:3;url=".BASEURL."inc/news.php");
				//termino el script
				exit();
			}
			closeBD($link);
		}
?>
	
	<div class="container espaciado">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Fecha de activación</label>
						<input type="date" name="dateNews" class="form-control" value="<?php echo $today; ?>" required>
					</div>
					<div class="form-group">
						<label>Titular de la noticia</label>
						<input type="text" name="titleNews" maxlength="60" class="form-control" id="name" placeholder="Introduce el titular..." required>
					</div>
					<div class="form-group">
						<label>Contenido</label>
						<textarea class="form-control" name="contentNews" maxlength="1000" rows="3" placeholder="Introduce el contenido..." required></textarea>
					</div>
					<div class="form-group">
						<label>Imagen</label>
						<input type="file" name="imageNews" class="imagenNoticia" required>
						<p class="help-block">El tamaño de la imagen no puede ser mayor a 2 MB.</p>
					</div>
					<button type="submit" name="newNewsSend" class="center-block btn btn-primary">Registrar</button>
				</form>
			</div>
		</div>
	</div>

	<?php footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>
</body>
</html>