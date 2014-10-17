<?php
	session_start();
	header("Content-Type: text/html; charset=UTF-8");
	session_destroy();
?>

		<h2>Ha salido del sistema correctamente.</h2>
		<a href="../vista/index.php">Iniciar sesión ahora</a>

