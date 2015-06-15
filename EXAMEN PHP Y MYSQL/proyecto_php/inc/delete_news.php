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
			<h2>ELIMINAR NOTICIAS</h2>
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

	 ?>

	<h3 class="text-center">Seleccione las noticias que desea eliminar</h3>
		<section id="showNewsTable" class="espaciado">
			<form action="#" method="post">
				<div class="container">
					<div class="row">
						<?php 
							$link = connectBD();

							$query = "SELECT * FROM noticias";
							$details_news = mysqli_query($link,$query);
							$num_records = mysqli_affected_rows($link);

							if($num_records == 0){
								echo '<h2 class="text-center">No hay noticias en la base de datos</h2>';
							}
							else{
								echo '<div class="table-responsive">
										<table class="table table-striped">
										<tr><th class="text-center">TITULAR</th><th class="text-center">CONTENIDO</th><th class="text-center">FECHA</th><th class="text-center">SELECCIONAR</th></tr>';
										while($row = mysqli_fetch_array($details_news)){
											echo '<tr><td class="text-center">'.$row['titular'].'</td><td class="text-center">'.$row['contenido'].'</td><td class="text-center">'.$row['fecha'].'</td><td class="text-center"><input type="checkbox" name="'.$row['id'].'" value="'.$row['id'].'"></td>';
										}
								echo '</table>
								</div>
								<button type="submit" name="deleteNewsSend" class="center-block btn btn-danger">Eliminar</button>';
							}
							closeBD($link);
						?>
					</div>
				</div>
			</form>
		</section>
		<?php
		if(isset($_POST["deleteNewsSend"])){
			$link = connectBD();

			foreach($_POST as $valor){						
				if(is_numeric($valor)){
					$query_name_image = "SELECT imagen FROM noticias WHERE id = '$valor'";
					$images_result = mysqli_query($link,$query_name_image);
					while($pathname = mysqli_fetch_array($images_result)){
						unlink('../img/noticias/'.$pathname['imagen']);
					}
					$query_delete = "DELETE FROM noticias WHERE id='$valor'";
					$deleteResult = mysqli_query($link,$query_delete);
					$num_records_delete = mysqli_affected_rows($link);
					if($num_records_delete == 0){
						echo '<h2 class="espaciado text-center">No ha seleccionado ninguna noticia</h2>';
					}
					else{
						echo '<h2 class="espaciado text-center">Se ha eliminado correctamente</h2>';
						header("refresh:3;url=".BASEURL."inc/news.php");
					}
				} 
			}
			closeBD($link);									
		}
		footer();
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>
</body>
</html>