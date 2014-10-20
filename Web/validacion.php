<?php

	session_start();
	include('error.php');
	
					
		function ValDate($fecha){
			                                                                          //verifica que una fecha tenga el formato
			if (!empty($fecha) || preg_match('#^(\d{4})-(\d{2})-(\d{2})$#',           // AAAA-MM-DD
			    $_POST['date'], $matches) && checkdate($matches[2],
			    $matches[3], $matches[1])) {
					
                
				} else {
					
					echo Error::display('Escriba una fecha válida (AAAA-MM-DD)',0,'warning','Fecha');
					header("location:index.php")
						
				}
			   			
			}
		
		 
		function verificar_password_strenght($pass){                                   //verifica que una contraseña séa segura
			if (!empty($pass) || 
			preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $pass)){
				}else{
					echo Error::display('Escriba una contraseña válida',0,'warning','Contraseña');
			}
					
		function validaEmail($email){                                                 //verifica que un email séa válido
		   if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
			  echo Error::display('Escriba un mail válido',0,'warning','Email');
		   }
		}
			
				
		public function ValNomApel($var2){
			
			
			}
		
		
?>
