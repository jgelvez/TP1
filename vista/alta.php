<html>
	
	<?php require('../conexion_BD.php');?>
	
	<form action="../controlador/alta_controlador.php" method="POST" <!-- tiene q ir a la BD-->
		<br>
		Apellido: <input type="text" name="apecli" value ="" placeholder="Apellido"/>
		Nombre: <input type="text" name="nomcli" value ="" placeholder="Nombre"/>
		Edad: <input type="int" name="edad" value ="" placeholder="Edad"/>
		<br>
		<input type="submit" name= "boton" value="Guardar"/>
	
	
	</html>
<?php 

		?>
