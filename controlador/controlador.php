
<?php
	//aca tengo buscar que la contraseña que se quiere inresar no séa igual a otra en la tabla de usuario
	require("../conexion_BD.php");
	session_start();
	header("Content-Type: text/html; charset=UTF-8");
	
	
	$nombre=$_POST['nombre'];
	$pass=$_POST['contrasenia'];
	
	$statement1 = $pdo->query("SELECT * FROM usuario WHERE contrasenia = $pass and nombre=$nombre ");
	$row = $statement1->fetch(PDO::FETCH_ASSOC); 
		
		if($row['rol']= 'administrador'){
			$_SESSION['nombre'] = $_POST['nombre'];
			echo "Bienvenido,".$_SESSION['nombre'];
			echo "<h1><a href='../vista/salida.php'>Cerrar sesión</a></h1>";
			require("../conexion_BD.php");
			require("../modelo/acceso_consulta.php");
	
	}else{
	echo"Error: no ha iniciado sesión \n";
	echo "<h1><a href='../vista/index.php'>Iniciar sesión </a> </h1>";
	
}
	
