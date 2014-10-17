<?php
	require_once('conexion.php');
	
	$lugar = $_POST['search'];
	

	echo "<br>";
	
	
	if(empty($lugar)){
			echo"<br>";
			
			$statement1 = $pdo->query("SELECT * FROM lugar WHERE nombre_lugar like '%$lugar%' OR descripcion like '%$lugar%' ");
			$row = $statement1->fetch(PDO::FETCH_ASSOC); 
			echo sprintf("Lugares %s   %s  %s", $row['nombre_lugar'], $row['direccion']); 
			echo"<br>";
			
				
		}else
			
			echo"<br> Por favor ingresar datos correctos <br>";
			



