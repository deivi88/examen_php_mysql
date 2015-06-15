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
			<h2>ELIMINAR TRABAJOS</h2>
		</div>
	</section>

	<?php 
		if(isset($_SESSION['id_usuario'])){
			$user_id = $_SESSION['id_usuario'];

			if($user_id == 1){
				works_submenu_admin();
			}
			else{
				works_submenu_user();
			}
		}
		else{
			works_submenu_client();
		}
	 ?>

	<section id="showNewsTable" class="espaciado">
		<form action="#" method="post">
			<div class="container">
				<div class="row">
					<?php 
						$link = connectBD();

						$query = "SELECT trabajos.*, nombre, apellidos FROM clientes, trabajos WHERE clientes.id=trabajos.id_cliente";
						$details_works = mysqli_query($link,$query);
						$num_records = mysqli_affected_rows($link);

						if($num_records == 0){
							echo '<h2 class="text-center">No hay trabajos en la base de datos</h2>';
						}
						else{
							echo '<h3 class="text-center">Seleccione los trabajos que desea eliminar</h3>
								<div class="table-responsive">
									<table class="table table-striped">
									<tr><th class="text-center">TITULO</th><th class="text-center">DESCRIPCIÓN</th><th class="text-center">CLIENTE</th><th class="text-center">FECHA DE REALIZACIÓN</th><th class="text-center">SELECCIONAR</th></tr>';
									while($row = mysqli_fetch_array($details_works)){
										echo '<tr><td class="text-center">'.$row['titulo'].'</td><td class="text-center">'.$row['descripcion'].'</td><td class="text-center">'.$row['nombre'].' '.$row['apellidos'].'</td><td class="text-center">'.$row['fecha'].'</td><td class="text-center"><input type="checkbox" name="'.$row['id'].'" value="'.$row['id'].'"></td>';
									}
							echo '</table>
							</div>
							<button type="submit" name="deleteWorksSend" class="center-block btn btn-danger">Eliminar</button>';
						}
						closeBD($link);
					?>
				</div>
			</div>
		</form>
	</section>
		
	<?php
		if(isset($_POST["deleteWorksSend"])){
			$link = connectBD();

			foreach($_POST as $valor){						
				if(is_numeric($valor)){
					$query_name_image = "SELECT imagen FROM trabajos WHERE id = '$valor'";
					$images_result = mysqli_query($link,$query_name_image);
					while($pathname = mysqli_fetch_array($images_result)){
						unlink('../img/trabajos/'.$pathname['imagen']);
					}
					$query_delete = "DELETE FROM trabajos WHERE id='$valor'";
					$deleteResult = mysqli_query($link,$query_delete);
					$num_records_delete = mysqli_affected_rows($link);
					if($num_records_delete == 0){
						echo '<h2 class="espaciado text-center">No ha seleccionado ningún trabajo</h2>';
					}
					else{
						echo '<h2 class="espaciado text-center">Se ha eliminado correctamente</h2>';
						header("refresh:3;url=".BASEURL."inc/works.php");
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