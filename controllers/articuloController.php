<?php
require_once 'models/articulo.php';
require_once 'models/producto.php';
// incluyo los modelos

class articuloController{
	
	public function index(){
		Utils::isAdmin(); // para comprobar que si el usuario es el administrador, invoca a la funcion
		// creada en utilitis dentro de la carpeta helpers
		$articulo = new Articulo();		
		$articulos = $articulo->getAll(); // llamo al método del modelo que he creado (getAll conseguir todas)
		// esta variable la devuelvo a mi vista, cargo la vista y allí ya la tendría disponible.
		require_once 'views/articulo/index.php'; // 
	}
	
	public function ver(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			
			// Conseguir articulo
			$articulo = new Articulo();
			$articulo->setId($id);
			$articulo = $articulo->getOne(); // llama al método del modelo articulo
			// y le pasamos el id que hemos recogido por get

		}
		
		require_once 'views/articulo/ver.php';
	}
	
	public function crear(){
		Utils::isAdmin();
		require_once 'views/articulo/crear.php';
	}
	
	public function save(){
		Utils::isAdmin();
	    if(isset($_POST) && isset($_POST['titulo']) && isset($_POST['texto']) && isset($_POST['autor'])){
			$articulo = new Articulo();
			$articulo->setTitulo($_POST['titulo']);
			$articulo->setTexto($_POST['texto']);
			$articulo->setAutor($_POST['autor']);
			$save = $articulo->save(); 

		header("Location:".base_url."articulo/index"); 
	}

}