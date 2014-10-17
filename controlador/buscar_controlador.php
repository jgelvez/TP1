<?php
	require('../conexion_BD.php');
	
	$ID = $_POST['id'];
	
	////////no andaaaaaaa
	echo "<br>";
	
	
	if(!empty($ID)){//exists????
			echo"<br>";
			///7777 hay q hacer algo 
			$statement1 = $pdo->query("SELECT id, apellido, nombre, edad FROM cliente WHERE id = $ID ");
			//$statement = $pdo->query("UTDATE INTO cliente(apellido, nombre, edad) VALUES ('$apellido','$nombre','$edad')");
			$row = $statement1->fetch(PDO::FETCH_ASSOC); 
			echo sprintf("Cliente %d.- %s  %s, %d años ", $row['id'],$row['apellido'],
			$row['nombre'], $row['edad']) ; echo"<br>";
			
				
			}else
			{
			echo"<br> Por favor ingresar datos correctos <br>";
			}
			echo"<a href = '../vista/alta.php'>Nuevo Cliente</a>";
			echo"<br> <br>";
			echo"<a href = '../modelo/consulta.php'>Listado de Clientes</a>";
			echo"<br> <br>";
			echo"<a href = '../vista/buscar.php'>Modificar</a>";/////aqui modificar
			

?>

