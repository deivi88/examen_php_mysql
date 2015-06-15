<?php
	session_start();
	include("functions.php");

	$link = connectBD();
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
			header('Location:'.BASEURL.'');
		}

	?>

	<section class="section_header">
		<div class="container-fluid text-center">
			<h2>NOTICIAS</h2>
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

		if(isset($_GET['id_news'])){
			$id_news = $_GET['id_news'];

				$link = connectBD();

				$query_news = "SELECT titular, contenido, fecha, imagen FROM noticias WHERE id = $id_news";

				$result_news = mysqli_query($link,$query_news);

				while($row = mysqli_fetch_array($result_news)){

					echo '<section class="container espaciado" id="newsFull">
							<div class="row">
									<h2 id="newstitle" class="text-center">'.$row['titular'].'</h2>
									<span class="text-center">Publicado en '.$row['fecha'].'</span>
									<img class="img-responsive center-block" src="../img/noticias/'.$row['imagen'].'">
									<p class="text-center">'.$row['contenido'].'</p>
							</div>
					</section>';

				}

				closeBD($link);

		}else{
			$link = connectBD();
			$query = "SELECT titular, contenido, imagen, fecha FROM noticias WHERE fecha <= '$today'";
			$details_news = mysqli_query($link,$query);
			$num_records = mysqli_affected_rows($link);
			echo '<section id="showNews" class="espaciado">
					<div class="container">';
						if($num_records == 0){
							echo '<h2 class="text-center">No hay noticias en la base de datos</h2>';
						}
						else{
							while($row = mysqli_fetch_array($details_news)){
								echo '<div class="row">
										<img class="col-md-4 img-responsive center-block" src="../img/noticias/'.$row['imagen'].'" alt="">
										<div class="col-md-8">
											<h2 class="text-center">'.$row['titular'].'</h2>
											<span class="text-center">Publicado en '.$row['fecha'].'</span>
											<p>'.$row['contenido'].'</p>
										</div>
									</div>';
							}
						}
				echo '</div>
			</section>';
			closeBD($link);
		}
	?>
	
	<?php footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>
</body>
</html>