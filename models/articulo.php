<?php

class Articulo{
	private $id;
	private $titulo;
	private $texto;
	private $autor;
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

	public function getTitulo() {
		return $this->nombre;
	}

	public function getTexto() {
		return $this->nombre;
	}

	public function getAutor() {
		return $this->nombre;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setTitulo($titulo) {
		$this->titulo = $this->db->real_escape_string($titulo); 
	}

	public function setTexto($texto) {
		$this->texto = $this->db->real_escape_string($texto); 
	}

	public function setAutor($autor) {
		$this->autor = $this->db->real_escape_string($autor); 
	}

	public function getAll(){ 
		$articulos = $this->db->query("SELECT * FROM articulos ORDER BY id DESC;");
		return $articulos;

	}
	
	public function getOne(){ 
		$articulo = $this->db->query("SELECT * FROM articulos WHERE id={$this->getId()}");
		return $articulo->fetch_object();
	}
	
	public function save(){ // método para insertar en la DB utilizamos en get nombre para sacar el nombre 
		//que hemos seteado previamente
		$sql = "INSERT INTO articulo VALUES(NULL, '{$this->getTitulo()}'), '{$this->getTexto()}'), '{$this->getAutor()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	
	
}
?>