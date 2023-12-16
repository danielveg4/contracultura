<?php

// los helpers son librerías útiles con pequeñas tareas que nos van a ayudar
//Vamos a hacer que la sesión desaparezca y para ello creamos una clase con funciones de utilizades
// la incluimos en el index.
class Utils{
	// vamo a crear una clase con métodos estáticos para no tener que instanciar la clase sino que 
	//directamente podemos invocar a los métodos
	public static function deleteSession($name){
		if(isset($_SESSION[$name])){// comprobamos si existe la sesión
			$_SESSION[$name] = null; // la pasamos a nulo y la borramos despues
			unset($_SESSION[$name]); //en caso de que exista la borramos
		}
		
		return $name;
	}
	
	public static function isAdmin(){ // comprobamos si existe esa sesión de administrador y en caso de que no exista
		// realizo una redirección para que me lleve al index de la página.
		if(!isset($_SESSION['admin'])){
			header("Location:".base_url);
		}else{
			return true; // si no existe devuelve true, esta función la puedo utilizar si necesito saber si es administrador
			// el usuario
		}
	}
	
	public static function isIdentity(){
		if(!isset($_SESSION['identity'])){ // si no existe sesión redirigimos a la página principal
			header("Location:".base_url);
		}else{
			return true;
		}
	}
	public static function showArticulos(){ 
		require_once 'models/articulo.php';
		$articulo = new Categoria();
		$articulos = $articulo->getAll();
		return $articulos;
	}
	
	public static function statsCarrito(){ // inicializar carrito
		$stats = array(
			'count' => 0,
			'total' => 0
		);
		
		if(isset($_SESSION['carrito'])){
			$stats['count'] = count($_SESSION['carrito']);
			
			foreach($_SESSION['carrito'] as $producto){
				$stats['total'] += $producto['precio']*$producto['unidades']; // se realiza 
				//una asignación con incremento para ir sumando los productos del carrito
			}
		}
		
		return $stats;
	}
	
	public static function showStatus($status){
		$value = 'Pendiente';
		
		if($status == 'confirm'){
			$value = 'Pendiente';
		}elseif($status == 'preparation'){
			$value = 'En preparación';
		}elseif($status == 'ready'){
			$value = 'Preparado para enviar';
		}elseif($status = 'sended'){
			$value = 'Enviado';
		}
		
		return $value;
	}
	
}
