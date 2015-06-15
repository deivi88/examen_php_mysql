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
			header('Location:'.BASEURL.'');
		}

	?>

	<section class="section_header">
		<div class="container-fluid text-center">
			<h2>TRABAJOS</h2>
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

		$link = connectBD();
		if($user_id==1){
			$query = "SELECT titulo, descripcion, fecha, imagen, nombre, apellidos, estado, fecha_estimada FROM clientes, trabajos WHERE clientes.id=trabajos.id_cliente";
		}
		else{
			$query = "SELECT titulo, descripcion, fecha, imagen, nombre, apellidos, estado, fecha_estimada FROM clientes, trabajos WHERE clientes.id=trabajos.id_cliente AND trabajos.id_cliente='$user_id'";
		}
		
		$details_works = mysqli_query($link,$query);
		$num_records = mysqli_affected_rows($link);
		echo '<section id="showWorks" class="espaciado">
				<div class="container">';
					if($num_records == 0){
						echo '<h2 class="text-center">No hay trabajos en la base de datos</h2>';
					}
					else{
						while($row = mysqli_fetch_array($details_works)){
							echo '<div class="row">';
								if($row['imagen']==NULL){
									echo '<img class="col-md-4 img-responsive center-block" src="../img/trabajos/construccion.jpg" alt="">
											<div class="col-md-8">
													<h2 class="text-center">'.$row['titulo'].'</h2>
													<span class="text-center">Pedido el '.$row['fecha'].'. Propiedad de '.$row['nombre'].' '.$row['apellidos'].'</span>';
												switch ($row['estado']){
													case 'F':
														echo '<p>En fabricación</p><p>Fecha estimada: '.$row['fecha_estimada'].'</p>';
														break;
													case 'E':
														echo '<p>Entregado</p>';
														break;
													case 'T':
														echo '<p>Terminado</p>';
														break;
												}	

												echo '<p>'.$row['descripcion'].'</p>
												</div>
											</div>';
								}
								else{
									switch ($row['estado']){
										case 'F':
											echo '<img class="col-md-4 img-responsive center-block" src="../img/trabajos/'.$row['imagen'].'" alt="">
												<div class="col-md-8">
													<h2 class="text-center">'.$row['titulo'].'</h2>
													<span class="text-center">Pedido el '.$row['fecha'].'. Propiedad de '.$row['nombre'].' '.$row['apellidos'].'</span>';

											echo '<img class="col-md-4 img-responsive center-block" src="../img/trabajos/construccion.jpg" alt="">
													<div class="col-md-8">
														<h2 class="text-center">'.$row['titulo'].'</h2>
														<span class="text-center">Pedido el '.$row['fecha'].'. Propiedad de '.$row['nombre'].' '.$row['apellidos'].'</span>
														<p>En fabricación</p><p>Fecha estimada: '.$row['fecha_estimada'].'</p>';
											break;
										case 'E':
											echo '<img class="col-md-4 img-responsive center-block" src="../img/trabajos/construccion.jpg" alt="">
													<div class="col-md-8">
														<h2 class="text-center">'.$row['titulo'].'</h2>
														<span class="text-center">Pedido el '.$row['fecha'].'. Propiedad de '.$row['nombre'].' '.$row['apellidos'].'</span>
														<p>Entregado</p>';
														break;
										case 'T':
											echo '<img class="col-md-4 img-responsive center-block" src="../img/trabajos/'.$row['imagen'].'" alt="">
												<div class="col-md-8">
													<h2 class="text-center">'.$row['titulo'].'</h2>
													<span class="text-center">Pedido el '.$row['fecha'].'. Propiedad de '.$row['nombre'].' '.$row['apellidos'].'</span>
													<p>Terminado</p>';
											break;
											
									}	

									echo '<p>'.$row['descripcion'].'</p>
											</div>
										</div>';
								}
							
						}
					}
					echo '</div>
					</section>';
		closeBD($link);
	?>
	
	<?php footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>
</body>
</html>