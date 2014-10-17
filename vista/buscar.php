<html>
	
	<?php require('../conexion_BD.php');?>
	
	<form action="../controlador/buscar_controlador.php" method="POST"> <!-- tiene q ir a la BD-->
		<br>
		Id <input type="int" name="id" value ="" placeholder="ID"/>
		<br>
		<input type="submit" name= "boton" value="Buscar"/>
		<br>
		</form>
		
	
	
<?php 
		echo"<a href = '../modelo/consulta.php'>Clientes</a>";
		
		?>
</html>

