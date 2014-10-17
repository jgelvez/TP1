 <?php
 require("../conexion_BD.php");
	echo"<br> <br>";
	echo "<h1><a href='../vista/salida.php'>Cerrar sesión</a></h1> <br>"; 
 //consultamos la base, obtenemos resultados
 $statement = $pdo->query("SELECT * FROM cliente");
 
 //volcamos el objeto de tipo 'mysqli_result' en un array asociativo
 $row = $statement->fetchAll(PDO::FETCH_ASSOC);   //fetch espero sólo una fila y fetchAll varias
 
 //mostramos los datos del array en pantalla (ej. en un template)
	foreach($row as $resultado){
		echo "<br>";
		echo sprintf("%d.- %s  %s , %d años", $resultado['id'], 
		$resultado['apellido'], $resultado['nombre'], $resultado['edad']);
 }
	echo "<br>";
	echo"<a href = '../vista/alta.php'>Nuevo Cliente</a>";
		echo "<br>";
		echo "<a href='../vista/buscar.php'>Modificar</a>";
