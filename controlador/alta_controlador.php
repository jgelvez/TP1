<?php
	require('../conexion_BD.php');
	
	$apellido = $_POST['apecli'];
	$nombre = $_POST['nomcli'];
	$edad = $_POST['edad'];
	
	////////no andaaaaaaa
	echo "<br>";
	
	
	if(!empty($nombre) && !empty($apellido) && $edad > 0){ //$nombre) !="" && $apellido !="" && $edad > 0)
			echo"<br>";
			$statement = $pdo->query("INSERT INTO cliente(apellido, nombre, edad) VALUES ('$apellido','$nombre','$edad')");
			//$row = $statement->fetchAll(PDO::FETCH_ASSOC); 
			echo"se guardo correctamente en la BD"; echo"<br>";
			
				
			}else
			{
			echo"<br> Por favor ingresar datos correctos <br>";
			}
			echo"<a href = '../vista/alta.php'>Nuevo Cliente</a>";
			echo"<br> <br>";
			echo"<a href = '../modelo/consulta.php'>Listado de Clientes</a>";
			

?>
