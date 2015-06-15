<?php
    if(isset($_COOKIE['contador'])){  
        setcookie('contador', $_COOKIE['contador'] + 1); 
        $mensaje = 'Número de visitas: ' . $_COOKIE['contador']; 
    } 
    else{ 
        setcookie('contador', 1); 
        $mensaje = 'Bienvenido a nuestra página web'; 
    } 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body> 
		<?php echo "<h2>".$mensaje."</h2>"; ?> 
</body>
</html>