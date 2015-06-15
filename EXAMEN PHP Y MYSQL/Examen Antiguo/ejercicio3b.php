<?php 
	session_start();
	echo "Hola ".$_SESSION['nombre'].", eres de ".$_SESSION['ciudad'];
?>

<style>
	body{
		background: <?php echo $_SESSION['color']; ?>;
	}
</style>