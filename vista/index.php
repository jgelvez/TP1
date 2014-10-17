<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       
    <h1>Bienvenido al Trabajo Integrador</h1>
    </head>
    <body>
		
		<form action="../controlador/controlador.php" method="POST">
		Usuario: <input type="text" name="nombre" value ="" placeholder="Tu Nombre"/>
		Contraseña: <input type="password" name="contrasenia" value ="" placeholder="Password"/>
		<input type="submit" name= "boton" value="Enviar"/>
		  
        <?php
        
			session_start();
			header("Content-Type: text/html; charset=UTF-8");
			
				
?>

  
    </body>
</html>
