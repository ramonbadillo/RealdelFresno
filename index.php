<?php
	$temp = $_SERVER['DOCUMENT_ROOT'];	
	require_once ($temp . 'lib/otherlibrary/initialize.php');
	require_once ($temp . 'models/Estado.php');
	require_once ($temp . 'models/Punto.php');
	
  	$p= Punto::find('all');
  	
	
	foreach ($p as $punto) {
		
	    echo $punto->descripcion;
	}
  	
	
	
	//usuario_controller::validate_session('Ramiro', '1234');
	//echo "Hola mundo";
?>