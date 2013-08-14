<?php
/**
* 
*/
class usuario_controller 
{
	
	function nuevo(){
		echo 'toma .l.';
	}
	
	function validate_session($name, $pass){
		$user = Usuario::find_by_nombre($name);
		
		if($user != null){
			if($user->password == $pass){
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
	}
	
}
	

?>