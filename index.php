<?php
				
	require_once $_DIR . 'lib/otherlibrary/initialize.php';
	require_once $_DIR . 'models/Estado.php';
	require_once $_DIR . 'models/Punto.php';
	
  	$p= Punto::find('all');
  	
	
	foreach ($p as $punto) {
		
	    echo $punto->descripcion;
	}
  	
	
	
	//usuario_controller::validate_session('Ramiro', '1234');
	//echo "Hola mundo";
?>