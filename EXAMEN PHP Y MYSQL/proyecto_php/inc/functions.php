<?php
//Defino las variables para la conexión de la base de datos y la URL para facilitar en el caso de cambiar de servidor

define('DBHOST','localhost'); 
define('DBUSER','root'); 
define('DBPASS',''); 
define('DBNAME','agenda');
define('BASEURL','http://localhost/proyecto_php/');

//Función para conectar la base de datos

function connectBD(){
    $link=mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME) or die("Error " . mysqli_error($link));
    return $link; 
}

//Función para cerrar la base de datos

function closeBD($c){
	mysqli_close($c);
}

//Función para crear la cabecera común en todas las páginas

function create_header_admin(){
	echo '<header id="cabecera">
		<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuMovil">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="'.BASEURL.'">MIS PINTURAS</a></h1>
				</div>
				<div class="collapse navbar-collapse" id="menuMovil">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="'.BASEURL.'" title=""><i class="icon-home"></i> INICIO</a></li>
						<li><a href="'.BASEURL.'inc/news.php" title=""><i class="icon-doc"></i> NOTICIAS</a></li>
						<li><a href="'.BASEURL.'inc/clients.php" title=""><i class="icon-users"></i> CLIENTES</a></li>
						<li><a href="'.BASEURL.'inc/works.php" title=""><i class="icon-brush"></i> TRABAJOS</a></li>
						<li><a href="'.BASEURL.'inc/contact.php" title=""><i class="icon-mail"></i> CONTACTO</a></li>
						<li><a href="'.BASEURL.'inc/cerrar_sesion.php" title=""><i class="icon-lock-open-filled"></i> CERRAR SESIÓN</a></li>
          			</ul>
          		</div>
      		</div>
		</nav>
	</header>';
}

function create_header_client(){
	echo '<header id="cabecera">
		<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuMovil">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="'.BASEURL.'">MIS PINTURAS</a></h1>
				</div>
				<div class="collapse navbar-collapse" id="menuMovil">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="'.BASEURL.'" title=""><i class="icon-home"></i> INICIO</a></li>
						<li><a href="'.BASEURL.'inc/news.php" title=""><i class="icon-doc"></i> NOTICIAS</a></li>
						<li><a href="'.BASEURL.'inc/works.php" title=""><i class="icon-brush"></i> TRABAJOS</a></li>
						<li><a href="'.BASEURL.'inc/contact.php" title=""><i class="icon-mail"></i> CONTACTO</a></li>
						<li><a href="'.BASEURL.'inc/cerrar_sesion.php" title=""><i class="icon-lock-open-filled"></i> CERRAR SESIÓN</a></li>
          			</ul>
          		</div>
      		</div>
		</nav>
	</header>';
}

function create_header_user(){
	echo '<header id="cabecera">
		<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuMovil">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="'.BASEURL.'">MIS PINTURAS</a></h1>
				</div>
				<div class="collapse navbar-collapse" id="menuMovil">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="'.BASEURL.'" title=""><i class="icon-home"></i> INICIO</a></li>
						<li><a href="'.BASEURL.'inc/contact.php" title=""><i class="icon-mail"></i> CONTACTO</a></li>
						<li><a href="'.BASEURL.'inc/acceder.php" title=""><i class="icon-lock-open-filled"></i> ACCEDER</a></li>
          			</ul>
          		</div>
      		</div>
		</nav>
	</header>';
}

//Función para mostrar imágenes aleatorias de los trabajos en el index
	
function imagenes_aleatorias(){
	// Extensiones a mostrar
	$extensions = array('jpg','jpeg','gif','png','bmp');

	// Nombre del directorio
	$folder_image_name = "/trabajos/";

	// Ruta del directorio
	$images_folder_path = "./img".$folder_image_name;

	// Url del directorio
	$url_to_folder = BASEURL."img".$folder_image_name;

	// Array de imágenes
	$images = array();

	// Abrimos el directorio y mostramos las imágenes
	if ($handle = opendir($images_folder_path)){
	    while (false !== ($file = readdir($handle))){
	        if($file != "." && $file != ".."){
			// Obtenemos la extensión del archivo
	        	$ext = strtolower(substr(strrchr($file, "."), 1));
				// Almacenamos en el array
				if(in_array($ext, $extensions)){
					$images[] = $url_to_folder.$file;
				}
	        }
	    }
	    // Cerramos el directorio
	    closedir($handle);
	}

	if(!empty($images)){ // Si hay algo que mostrar
		$aleatorio=mt_rand(0,count($images)-1);
		$src = $images[$aleatorio];
		echo "<img class='center-block img-responsive' src='".$src."'>";
	}
	else{
		// Si no hay nada que mostrar, mostramos una imagen predeterminada
		echo "<img class='center-block img-responsive' src='".$url_to_folder."predeterminada.jpg'>";
	}
}

//Funciones para crear los submenus de Noticias, Clientes y Trabajos

function news_submenu_admin(){
	echo '<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="submenu">
						<ul class="row">
							<li class="col-xs-12 col-sm-4 text-center"><a class="btn btn-default btn-lg" href="'.BASEURL.'inc/new_news.php" title="">Nueva</a></li>
							<li class="col-xs-12 col-sm-4 text-center"><a class="btn btn-default btn-lg" href="'.BASEURL.'inc/search_news.php" title="">Buscar</a></li>
							<li class="col-xs-12 col-sm-4 text-center"><a class="btn btn-default btn-lg" href="'.BASEURL.'inc/delete_news.php" title="">Borrar</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>';
}

function news_submenu_user(){
	echo '<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="submenu">
						<ul class="row">
							<li class="col-xs-12 col-sm-4 text-center"><a class="btn btn-default btn-lg" href="'.BASEURL.'inc/search_news.php" title="">Buscar</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>';
}

function clients_submenu(){
	echo '<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="submenu">
						<ul class="row">
							<li class="col-xs-12 col-sm-4 text-center"><a class="btn btn-default btn-lg" href="'.BASEURL.'inc/new_clients.php" title="">Nuevo</a></li>
							<li class="col-xs-12 col-sm-4 text-center"><a class="btn btn-default btn-lg" href="'.BASEURL.'inc/search_clients.php" title="">Buscar</a></li>
							<li class="col-xs-12 col-sm-4 text-center"><a class="btn btn-default btn-lg" href="'.BASEURL.'inc/delete_clients.php" title="">Borrar</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>';
}

function works_submenu_admin(){
	echo '<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="submenu">
						<ul class="row">
							<li class="col-xs-12 col-sm-4 text-center"><a class="btn btn-default btn-lg" href="'.BASEURL.'inc/new_works.php" title="">Nuevo</a></li>
							<li class="col-xs-12 col-sm-4 text-center"><a class="btn btn-default btn-lg" href="'.BASEURL.'inc/search_works.php" title="">Buscar</a></li>
							<li class="col-xs-12 col-sm-4 text-center"><a class="btn btn-default btn-lg" href="'.BASEURL.'inc/delete_works.php" title="">Borrar</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>';
}

function works_submenu_client(){
	echo '<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="submenu">
						<ul class="row">
							<li class="col-xs-12 col-sm-4 text-center"><a class="btn btn-default btn-lg" href="'.BASEURL.'inc/search_works.php" title="">Buscar</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>';
}

//Función para crear el footer

function footer(){
	echo '<footer id="pie" class="container-fluid">
			<div class="row redes">
				<ul>
					<li class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-1 col-md-offset-4 text-center"><a href="https://www.facebook.com/deivi88" title=""><i class="icon-facebook-circled"></i></a></li>
					<li class="col-xs-4 col-sm-2 col-md-1 text-center"><a href="https://twitter.com/deivi88" title=""><i class="icon-twitter-circled"></i></a></li>
					<li class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1 text-center"><a href="" title=""><i class="icon-gplus-circled"></i></a></li>
					<li class="col-xs-4 col-sm-2 col-md-1 text-center"><a href="" title=""><i class="icon-pinterest-circled"></i></a></li>
				</ul>
			</div>
			<div class="row info">
				<span class="text-center">Trabajo realizado por David Redondo Pérez para el Proyecto de PHP y MySQL</span>
			</div>
		</footer>';
}
?>