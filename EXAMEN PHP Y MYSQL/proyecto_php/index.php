<?php
	session_start();
	include("inc/functions.php");

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
			create_header_user();
		}

	?>
	
	<section id="trabajos_aleatorios">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<?php imagenes_aleatorias(); ?>
				</div>
			</div>
		</div>
	</section>

	<section id="last_news" class="espaciado">
		<div class="container">
			<h2 class="text-center news_title">ÚLTIMAS NOTICIAS</h2>
				<?php
					$link = connectBD();
					$query = "SELECT id, titular, imagen FROM noticias ORDER BY fecha DESC LIMIT 3";
					$lastNews = mysqli_query($link, $query);
					$num_records = mysqli_affected_rows($link);
					if($num_records == 0){
						echo '<h2 class="text-center">No hay noticias en la base de datos</h2>';
					}
					else{
						while($row = mysqli_fetch_array($lastNews)){
							echo '<div class="row separador_news">
									<img class="col-xs-12 col-md-4 img-responsive vcenter" src="img/noticias/'.$row['imagen'].'" alt="">
									<div class="col-xs-12 col-md-5 vcenter">
										<h2 class="text-center">'.$row['titular'].'</h2>
									</div>
									<div class="col-xs-12 col-md-2 text-center vcenter">
										<a class="btn btn-primary" href="./inc/news.php?id_news='.$row['id'].'">Ver</a>
									</div>
								</div>';
						}
					}
					closeBD($link);

	 			?>
		</div>
	</section>

	<?php footer(); ?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>
</body>
</html>