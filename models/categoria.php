<?php

class Categoria{
	private $id;
	private $nombre;
	private $db;
	// las columnas de la tabla categoría son nuestras propiedades o atributos de nuestra clase
	// el atributo db se va a utilizar para las consultas a la base de datos
	public function __construct() {
		$this->db = Database::connect();
		// constructor de la clase le pasamos la conexión de la db
	}
	
	public function getId() {
		return $this->id;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre); // este campo es un campo que viene del
		//formulario de usuario por lo que lo vamos a escapar para que nadie intente rompernos nuestra consulta
		//sql 
	}

	public function getAll(){ //cojer todas
		// para consultar todas las categorias
		$categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
		return $categorias;
		// devuelvo la cosulta de la tabla en el controlador de categorias usaríamos este método
	}
	
	public function getOne(){ // seleccionar uno
		$categoria = $this->db->query("SELECT * FROM categorias WHERE id={$this->getId()}");
		return $categoria->fetch_object();
	}
	
	public function save(){ // método para insertar en la DB utilizamos en get nombre para sacar el nombre 
		//que hemos seteado previamente
		$sql = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	
	
}
?>