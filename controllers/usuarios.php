<?php
	include_once($_SERVER['DOCUMENT_ROOT'] . '/models/usuario.php');
	//function validate_session( ){
		$user = Usuario::find_by_nombre($_POST['nombre']);
		
		if($user != null){
			if($user->password == $_POST['pass']){
				$_SESSION['user'] = $user->nombre;
				$_SESSION['pass'] = $user->password;
				//echo 'Bienvenido : ' . $_SESSION['user'];
				header("Location: $_DIR views/usuarios/nuevo.php");
			}
			else 
			{
				echo 'Contraseña incorrecta';
			}
		}
		else 
		{
			echo 'No existe este usuario';
		}
		//}
	

	

?>