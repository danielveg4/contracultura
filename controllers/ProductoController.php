<?php
require_once 'models/producto.php';// cargamos el modelo 

class productoController{
	
	public function index(){
		$producto = new Producto();
		$productos = $producto->getRandom(6); //llamamos al método aleatrorio del modelo
	
		// renderizar vista
		require_once 'views/producto/destacados.php'; // cargamos la vista 
	}
	
	public function ver(){ // visualizar un producto
		if(isset($_GET['id'])){
			$id = $_GET['id']; 
		
			$producto = new Producto();
			$producto->setId($id);
			
			$product = $producto->getOne(); // llamada al método del modelo producto.php
			
		}
		require_once 'views/producto/ver.php'; // llamamos a la vista 
	}
	
	public function gestion(){
		Utils::isAdmin();
		
		$producto = new Producto();
		$productos = $producto->getAll(); // llamada a método del modelo
		
		require_once 'views/producto/gestion.php';
	}
	
	public function crear(){
		Utils::isAdmin();
		require_once 'views/producto/crear.php';
	}
	
	public function save(){
		Utils::isAdmin(); // comprobamos si es el adminsitrador pora que pueda ejecutar esta parate
		if(isset($_POST)){ 
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false; // comprobación ternaria, si existe post nombre el valor de la variable va a ser $_POST[nombre] y sino es false
			$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
			$precio = isset($_POST['precio']) ? $_POST['precio'] : false;
			$stock = isset($_POST['stock']) ? $_POST['stock'] : false;
			$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
			//La imagen la gestionamos de otra manera con la subida del archivo recordemos que hay que
			//especificar en enctype="multipart/form-data
			
			if($nombre && $descripcion && $precio && $stock && $categoria){
				$producto = new Producto(); // creamos el objeto y le seteamos los valores 
				$producto->setNombre($nombre);
				$producto->setDescripcion($descripcion);
				$producto->setPrecio($precio);
				$producto->setStock($stock);
				$producto->setCategoria_id($categoria);
				
				// Guardar la imagen
				if(isset($_FILES['imagen'])){ // recojemos en la variable superglobal la variable de imagen que es el nombre que le hemos puesto 
					//al campo imagen del formulario
					$file = $_FILES['imagen'];
					$filename = $file['name'];
					$mimetype = $file['type']; // tipo de archivo

					if($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif'){
						// comprobamos el tipo de imagen
						if(!is_dir('uploads/images')){ // en caso de que no exista el directorio lo creamos
							mkdir('uploads/images', 0777, true);
						}

						$producto->setImagen($filename); // movemos del directorio temporal de subidas a uploads/images
						move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
					}
				}
				
				if(isset($_GET['id'])){ // en función de si esite el id llamamos al metodo de edición o al de guardado
					$id = $_GET['id']; 
					$producto->setId($id);
					
					$save = $producto->edit(); // llamada al método del modelo 
				}else{
					$save = $producto->save();
				}
				
				if($save){  // comprobamos si se ha realizado correctamente
					$_SESSION['producto'] = "complete"; // almacenamos en S_SESSION  para controlar el mensaje que se muestra
					// desde la vista gestion.php
				}else{
					$_SESSION['producto'] = "failed";
				}
			}else{
				$_SESSION['producto'] = "failed";
			}
		}else{
			$_SESSION['producto'] = "failed"; 
		}
		header('Location:'.base_url.'producto/gestion'); // redireccionamos a la vista gestion
	}
	
	public function editar(){
		Utils::isAdmin(); // comprobamos si es administrador para que pueda realizar la edición
		if(isset($_GET['id'])){ 
			$id = $_GET['id'];
			$edit = true; // establecemos esta variable para realizar la comprobación en la vista crear.php
			// y así poder reutilizar la misma vista tanto para crear como para editar
			
			$producto = new Producto();
			$producto->setId($id);
			
			$pro = $producto->getOne(); // llamamos al método del modelo 
			
			require_once 'views/producto/crear.php'; // cargamos la vista
			
		}else{
			header('Location:'.base_url.'producto/gestion'); // redirigimos a la vista de gestion
		}
	}
	
	public function eliminar(){
		Utils::isAdmin(); // comprobamos si es administrador para que pueda realizar la eliminación
		
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$producto = new Producto();
			$producto->setId($id);
			
			$delete = $producto->delete(); // llamamos al método del modelo 
			if($delete){ // comprobamos que se ha realizado correctamente
				$_SESSION['delete'] = 'complete'; // almacenamos en S_SESSION  para controlar el mensaje que se muestra
				// desde la vista gestion.php
			}else{
				$_SESSION['delete'] = 'failed';
			}
		}else{
			$_SESSION['delete'] = 'failed';
		}
		
		header('Location:'.base_url.'producto/gestion'); // redirección a la vista gestion
	}
	
}