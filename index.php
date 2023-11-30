<?php
session_start(); // para tener la sesión inciada en nuestro proyecto

require_once 'autoload.php';
require_once 'config/Database.php'; // carganis el fichero de conexión a la DB
require_once 'config/parameters.php'; // para cargar las constantes que hemos declarado y que utilizaremos
// a lo largo del proyecto como base_url
require_once 'helpers/utils.php';
require_once 'views/layout/header.php'; // maquetación de la página
require_once 'views/layout/sidebar.php'; // maquetación de la página

function show_error(){ // función en caso de error nos carga el controlador que hemos definido para
	//que muestre el error
	$error = new errorController(); 
	$error->index();
}

if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';
	//almaceno el nombre del controlador existente
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default; // para que en caso de que no exista el controlador y no existe
	//la acción nos carge el controlador por defecto con la contante que teniamos definida en parameters.php
	
}else{
	show_error();
	
	exit();
}

if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	// si existe el controlador nos cargue la acción por defecto.
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
	}else{
		show_error();
	}
}else{
	show_error();
}

require_once 'views/layout/footer.php'; // maquetación de la página

