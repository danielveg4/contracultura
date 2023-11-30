<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';
// incluyo los modelos

class categoriaController{
	
	public function index(){
		Utils::isAdmin(); // para comprobar que si el usuario es el administrador, invoca a la funcion
		// creada en utilitis dentro de la carpeta helpers
		$categoria = new Categoria();		
		$categorias = $categoria->getAll(); // llamo al método del modelo que he creado (getAll conseguir todas)
		// esta variable la devuelvo a mi vista, cargo la vista y allí ya la tendría disponible.
		require_once 'views/categoria/index.php'; // 
	}
	
	public function ver(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			
			// Conseguir categoria
			$categoria = new Categoria();
			$categoria->setId($id);
			$categoria = $categoria->getOne(); // llama al método del modelo categoria
			
			// Conseguir productos;
			$producto = new Producto();
			$producto->setCategoria_id($id);
			$productos = $producto->getAllCategory(); // llama al método del modelo del producto
		}
		
		require_once 'views/categoria/ver.php';
	}
	
	public function crear(){
		//método para comprobar si es administrador solo lo utilizamos cuando necesitemos 
		//que la vista sea específica para el administrador
		// y llamamos a la vista crear 
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
	}
	
	public function save(){
		// método para guardar la categoria que hemos creado
		Utils::isAdmin();
	    if(isset($_POST) && isset($_POST['nombre'])){
			// Guardar la categoria en bd
			$categoria = new Categoria();
			$categoria->setNombre($_POST['nombre']);
			$save = $categoria->save(); // llamos al método crear del modelo
		}
		header("Location:".base_url."categoria/index"); // para mostrar todo el listado de categorias
	}
	// podríamos editar, eliminar, realizar una validación compleja que fuera mostrando mensajes de alerta
	// en función de si se están añadiendo correctamente etc. 
}