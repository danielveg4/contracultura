<?php

class Producto{
	// atributos correspondientes a cada campo de la tabla producto
	private $id;
	private $categoria_id;
	private $nombre;
	private $descripcion;
	private $precio;
	private $stock;
	private $oferta;
	private $fecha;
	private $imagen;
	// atributo para almacenar la conexión a la db
	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
		// inicialización conexión a la db
	}
	
	public function getId() {
		return $this->id;
	}

	public function getCategoria_id() {
		return $this->categoria_id;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function getDescripcion() {
		return $this->descripcion;
	}

	public function getPrecio() {
		return $this->precio;
	}

	public function getStock() {
		return $this->stock;
	}

	public function getOferta() {
		return $this->oferta;
	}

	public function getFecha() {
		return $this->fecha;
	}

	public function getImagen() {
		return $this->imagen;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setCategoria_id($categoria_id) {
		$this->categoria_id = $categoria_id;
	}

	public function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	public function setDescripcion($descripcion) {
		$this->descripcion = $this->db->real_escape_string($descripcion);
	}

	public function setPrecio($precio) {
		$this->precio = $this->db->real_escape_string($precio);
	}

	public function setStock($stock) {
		$this->stock = $this->db->real_escape_string($stock);
	}

	public function setOferta($oferta) {
		$this->oferta = $this->db->real_escape_string($oferta);
	}

	public function setFecha($fecha) {
		$this->fecha = $fecha;
	}

	public function setImagen($imagen) {
		$this->imagen = $imagen;
	}

	public function getAll(){ // muestra todas los productos por orden descendente
		$productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");
		return $productos;
	}
	
	public function getAllCategory(){ // muestra todos los productos por categoria
		$sql = "SELECT p.*, c.nombre AS 'catnombre' FROM productos p "
				. "INNER JOIN categorias c ON c.id = p.categoria_id "
				. "WHERE p.categoria_id = {$this->getCategoria_id()} "
				. "ORDER BY id DESC";
		$productos = $this->db->query($sql);
		return $productos;
	}
	
	public function getRandom($limit){ // muestra un numero de productos en orden aleatorio
		$productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit");
		// RAND() funcion que muestra un valor aleatorio https://dev.mysql.com/doc/refman/5.7/en/mathematical-functions.html
		return $productos;
	}
	
	public function getOne(){ // muestra un producto determinado por su id
		$producto = $this->db->query("SELECT * FROM productos WHERE id = {$this->getId()}");
		return $producto->fetch_object();
	}
	
	public function save(){  // guarda un producto en la DB
		$sql = "INSERT INTO productos VALUES(NULL, {$this->getCategoria_id()}, '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, null, CURDATE(), '{$this->getImagen()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	
	public function edit(){ // edita un producto determinado según su id
		$sql = "UPDATE productos SET nombre='{$this->getNombre()}', descripcion='{$this->getDescripcion()}', precio={$this->getPrecio()}, stock={$this->getStock()}, categoria_id={$this->getCategoria_id()}  ";
		
		if($this->getImagen() != null){ // en el caso de que se haya introducido una imagen tambien la edita.
			$sql .= ", imagen='{$this->getImagen()}'";
		}
		
		$sql .= " WHERE id={$this->id};";
		
		
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	
	public function delete(){ // borra un producto determinado por su id
		$sql = "DELETE FROM productos WHERE id={$this->id}";
		$delete = $this->db->query($sql);
		
		$result = false;
		if($delete){
			$result = true;
		}
		return $result;
	}
	
}
?>