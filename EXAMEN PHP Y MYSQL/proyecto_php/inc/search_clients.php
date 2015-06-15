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
			<h2>BUSCAR CLIENTES</h2>
		</div>
	</section>

	<?php clients_submenu(); ?>
		<section id="showClients" class="espaciado">
			<form action="#" method="post">
				<div class="container">
					<div class="row">
						
						<?php 
							$link = connectBD();

							if(isset($_POST['searchClientsSend'])){
								$word = $_POST['wordClientsSearch'];
								$order_by = $_POST['order_by'];
								$order = $_POST['order'];

								$query = "SELECT * FROM clientes WHERE nombre LIKE '%$word%' OR apellidos LIKE '%$word%' OR direccion LIKE '%$word%' ORDER BY $order_by $order";
								$searchResult = mysqli_query($link, $query);
								$num_records = mysqli_affected_rows($link);
								
								if($num_records == 0){
									echo '<h2 class="text-center">No hay resultados de búsqueda</h2>';
								}
								else{
									echo '<div class="table-responsive">
											<table class="table table-striped">
												<tr><th class="text-center">NOMBRE</th><th class="text-center">APELLIDOS</th><th class="text-center">DIRECCIÓN</th><th class="text-center">TELÉFONO 1</th><th class="text-center">TELÉFONO 2</th><th class="text-center">MODIFICAR</th></tr>';
									while($row = mysqli_fetch_array($searchResult)){
										echo '<tr><td class="text-center">'.$row['nombre'].'</td><td class="text-center">'.$row['apellidos'].'</td><td class="text-center">'.$row['direccion'].'</td><td class="text-center">'.$row['telefono1'].'</td><td class="text-center">'.$row['telefono2'].'</td><td class="text-center"><input type="radio" name="id" value="'.$row['id'].'" required></td>';
									}
									echo '</table>
										</div>
										<button type="submit" name="modifyClientSend" class="center-block btn btn-danger">Modificar</button>';
								}
							}

							closeBD($link);

						?>
					</div>
				</div>
			</form>
		</section>

		<div class="container espaciado">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<form action="#" method="post" class="searchform">
						<div class="form-group">
							<label>¿Qué está buscando?</label>
							<input type="text" name="wordClientsSearch" class="form-control" id="name" placeholder="Introduce la búsqueda..." required>
						</div>
						<div class="form-group">
							<label>Ordenados por:</label>
							<input type="radio" name="order_by" value="nombre" checked>
							Nombre
							<input type="radio" name="order_by" value="apellidos">
							Apellidos
						</div>
						<div class="form-group">
							<label>Seleccione el orden:</label>
							<input type="radio" name="order" value="ASC" checked>
							Ascendente
							<input type="radio" name="order" value="DESC">
							Descendente
						</div>
						<button type="submit" name="searchClientsSend" class="center-block btn btn-primary">Buscar <i class="icon-search"></i></button>
					</form>
				</div>
			</div>
		</div>

	<?php
		$link = connectBD();

		if(isset($_POST["modifyClientSend"])){	
			$id = $_POST['id'];
			$query_modify = "SELECT * FROM clientes WHERE id='$id'";
			$modifyResult = mysqli_query($link,$query_modify);
			$num_records_modify = mysqli_affected_rows($link);
			$row_modify = mysqli_fetch_array($modifyResult);
				if($num_records_modify == 0){
					echo '<h2 class="text-center">No ha seleccionado ningún cliente</h2>';
				}
				else{
	?>
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<form action="#" method="post">
									<div class="form-group">
										<label>Nombre</label>
										<input type="text" name="name" class="form-control" value='<?php echo $row_modify["nombre"] ?>' placeholder="Introduce el nombre..." required>
									</div>
									<div class="form-group">
										<label>Apellidos</label>
										<input type="text" name="last_name" class="form-control" value='<?php echo $row_modify["apellidos"] ?>' placeholder="Introduce los apellidos..." required>
									</div>
									<div class="form-group">
										<label>Dirección</label>
										<input type="text" name="address" class="form-control" value='<?php echo $row_modify["direccion"] ?>' placeholder="Introduce la dirección..." required>
									</div>
									<div class="form-group">
										<label>Teléfono 1</label>
										<input type="tel" name="phone1" class="form-control" value='<?php echo $row_modify["telefono1"] ?>' placeholder="Introcuce el teléfono 1..." required>
									</div>
									<div class="form-group">
										<label>Teléfono 2</label>
										<input type="tel" name="phone2" class="form-control" value='<?php echo $row_modify["telefono2"] ?>' placeholder="Introduce el teléfono 2...">
									</div>
									<input type="hidden" name="id" value='<?php echo $row_modify["id"] ?>'>
									<button type="submit" name="updateClientSend" class="center-block btn btn-primary">Actualizar</button>
								</form>
							</div>
						</div>
					</div>
	<?php
				}
		} 
		closeBD($link);
	?>

	<?php
		$link = connectBD();
		if(isset($_POST["updateClientSend"])){
			$name = $_POST['name'];
			$last_name = $_POST['last_name'];
			$address = $_POST['address'];
			$phone1 = $_POST['phone1'];
			$phone2 = $_POST['phone2'];
			$id = $_POST['id'];

			$query = "UPDATE clientes SET nombre='$name', apellidos='$last_name', direccion='$address', telefono1='$phone1', telefono2='$phone2' WHERE id = $id";
			$result = mysqli_query($link, $query);
			if($result == true){
				echo '<h2 class="text-center">Cliente actualizado correctamente</h2>';
				header("refresh:3;url=".BASEURL."inc/clients.php");
			}
			else{
				echo '<h2 class="text-center">Se ha producido un error al actualizar en la base de datos</h2>';
			}
		}

	?>
	
	<?php footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>
</body>
</html>