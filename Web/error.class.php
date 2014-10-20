<?php
	class Error {
		public static function display($mensaje[], $tipo = 0, $nombreDeClase = 'alert', $titulo = '') {
			$tipos = array(array('¡Advertencia!', 'block'), array('Error', 'error'), array('¡Ok!', 'success'), array('Información', 'info'));
			return '<div class="'.$nombreDeClase.' alert-'.$tipos[$tipo][1].'">
				<a class="close" data-dismiss="alert" href="#">×</a>
				<h4 class="alert-heading">'.((empty($titulo)) ? $tipos[$tipo][0] : $titulo).'</h4>
				'.$mensaje.'</div>';
		}
	}
