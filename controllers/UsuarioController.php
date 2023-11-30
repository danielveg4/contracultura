<?php
require_once 'models/usuario.php'; // cargo el modelo que usaré en este controlador

class usuarioController{
	//método principal
	public function index(){
		echo "Controlador Usuarios, Acción index";
	}
	//método (accion) registro de usuarios
	public function registro(){
		require_once 'views/usuario/registro.php';
		//mostramos la vista de usuarios
	}
	//método para guardar los datos del usuario
	public function save(){
		if(isset($_POST)){
			// lo establecemos en el controlador, se podría hacer una librería que nos validara lso datos
			// tomo los datos por el método pos lo almaceno en la variable
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
			$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
			$email = isset($_POST['email']) ? $_POST['email'] : false;
			$password = isset($_POST['password']) ? $_POST['password'] : false;
			// deberíamos validar todos los datos correctamente.

			if($nombre && $apellidos && $email && $password){
				// si estas variables son true que almacene los datos en caso contrario mostraria registro
				//fallido
				// creo el objeto y establezco los atributos recojidos por post
				$usuario = new Usuario();
				$usuario->setNombre($nombre);
				$usuario->setApellidos($apellidos);
				$usuario->setEmail($email);
				$usuario->setPassword($password);

				$save = $usuario->save(); // Guarda todos los datos del objeto en un registro de la DB
				if($save){
					$_SESSION['register'] = "complete";
				}else{
					$_SESSION['register'] = "failed";
				}
			}else{
				$_SESSION['register'] = "failed";
			}
		}else{
			$_SESSION['register'] = "failed";
		}
		header("Location:".base_url.'usuario/registro');
	}
	
	public function login(){
		if(isset($_POST)){
			// Identificar al usuario
			// Consulta a la base de datos
			$usuario = new Usuario();
			$usuario->setEmail($_POST['email']); // utiizamos el set para setear las propiedades
			$usuario->setPassword($_POST['password']);// del objeto usuario
			
			$identity = $usuario->login(); // lanzamos el login que hace la consulta y nos devuelve
			// el usuario identificado.
			

			if($identity && is_object($identity)){
				// creamos la sesitón con todos los datos del usuario
				$_SESSION['identity'] = $identity;
				
				if($identity->rol == 'admin'){
					$_SESSION['admin'] = true;
				}// lanzamos una sesión específico para el usuario administrador
				
			}else{
				$_SESSION['error_login'] = 'Identificación fallida !!';
				// en el caso de que no se cumpla el login bien creamos una variable sesión error_login
				// y le pasamos el mensaje de idenfiticación fallida.
			}
		
		}
		header("Location:".base_url);
	}
	// cierre de la sesión
	public function logout(){
		if(isset($_SESSION['identity'])){ // si existe identity cerramos la sesión 
			unset($_SESSION['identity']);
		}
		
		if(isset($_SESSION['admin'])){ // si existe la sesión de admin tambien la borramos
			unset($_SESSION['admin']);
		}
		
		header("Location:".base_url); // redireccionamos para que nos lleve a la base_url
	}
	
} // fin clase