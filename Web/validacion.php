<?php

		function validarFecha($fecha){
			                                                                          //verifica que una fecha tenga el formato
			if (!empty($fecha) || preg_match('#^(\d{4})-(\d{2})-(\d{2})$#',           // AAAA-MM-DD
			    $_POST['date'], $matches) && checkdate($matches[2],
			    $matches[3], $matches[1])) {
					return true;
				} else {
					return false;						
				}
			   			
			}
	
		 
		function verificar_password_strenght($pass){                                   //verifica que una contraseña séa segura
			if (!empty($pass) || 
			preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $pass)){
				
				return true;
				
				}else{
					
					return false;
					
			}
			
		function validaEmail($email){                                                 //verifica que un email séa válido
		   if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
			  return false;
		   }
		}
			
		
		
?>
