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
			<h2>BUSCAR NOTICIAS</h2>
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
			header('Location:'.BASEURL.'');
		}

	 ?>

	<?php 
		$link = connectBD();
		if(isset($_POST['searchNewsSend'])){
			$word = $_POST['wordNewsSearch'];
			$order_by = $_POST['order_by'];
			$order = $_POST['order'];

			$query = "SELECT titular, contenido, imagen, fecha FROM noticias WHERE titular LIKE '%$word%' OR fecha LIKE '%$word%' ORDER BY $order_by $order";
			$searchResult = mysqli_query($link, $query);
			$num_records = mysqli_affected_rows($link);
			echo '<section id="showNews">
					<div class="container">';
			if($num_records == 0){
				echo '<h2 class="text-center">No hay resultados de búsqueda</h2>';
			}
			else{
				while($row = mysqli_fetch_array($searchResult)){
					echo '<div class="row">
							<img class="col-md-4 img-responsive" src="../img/noticias/'.$row['imagen'].'" alt="">
							<div class="col-md-8">
								<h2 class="text-center">'.$row['titular'].'</h2>
								<span>Publicado en '.$row['fecha'].'</span>
								<p>'.$row['contenido'].'</p>
							</div>
						</div>';
				}
			}
				echo '</div>
			</section>';
		}

		closeBD($link);
	?>

	<div class="container espaciado">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<form action="#" method="post" class="searchform">
					<div class="form-group">
						<label for="name">¿Qué está buscando?</label>
						<input type="text" name="wordNewsSearch" class="form-control" id="name" placeholder="Introduce la búsqueda..." required>
					</div>
					<div class="form-group">
						<label>Ordenados por:</label>
						<input type="radio" name="order_by" value="titular" checked>
						Titular
						<input type="radio" name="order_by" value="fecha">
						Fecha de activación
					</div>
					<div class="form-group">
						<label>Seleccione el orden:</label>
						<input type="radio" name="order" value="ASC" checked>
						Ascendente
						<input type="radio" name="order" value="DESC">
						Descendente
					</div>
					<button type="submit" name="searchNewsSend" class="center-block btn btn-primary">Buscar <i class="icon-search"></i></button>
				</form>
			</div>
		</div>
	</div>

	<?php footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>
</body>
</html>