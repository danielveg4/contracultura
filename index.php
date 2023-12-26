<?php
session_start(); // para tener la sesión inciada en nuestro proyecto

require_once 'autoload.php';
require_once 'config/db.php'; // carganis el fichero de conexión a la DB
require_once 'config/parameters.php'; // para cargar las constantes que hemos declarado y que utilizaremos
// a lo largo del proyecto como base_url
require_once 'helpers/utils.php';
require_once 'views/layout/header.php'; // maquetación de la página
require_once 'views/layout/central.php'; // maquetación de la página
require_once 'views/layout/index_shop.php'; // maquetación de la página
require_once 'views/layout/footer.php'; // maquetación de la página
require_once 'controllers/' . $nombre_controlador . '.php';

function show_error(){ 
	$error = new errorController(); 
	$error->index();
}

if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default;
	
}else{
	show_error();
	
	exit();
}

if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
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
