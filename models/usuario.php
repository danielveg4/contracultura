<?php

class Usuario{
	// atributos que serán uno por cada campo creado en la tabla usurios de nuestra DB
	// todo esto lo utilizamos para crear los objetos

	private $id;
	private $nombre;
	private $apellidos;
	private $email;
	private $password;
	private $rol;
	private $imagen;
	private $db; // establecemos este atributo para cargar la conexión a la DB
	
	public function __construct() {
		$this->db = Database::connect(); // establecemos en el constructor la conexión a la DB 
	}
	// métodos get y set
	
	function getId() {
		return $this->id;
	}

	function getNombre() {
		return $this->nombre;
	}

	function getApellidos() {
		return $this->apellidos;
	}

	function getEmail() {
		return $this->email;
	}

	function getPassword() {
		return password_hash($this->db->real_escape_string($this->password),PASSWORD_BCRYPT , ['cost' => 4]);	
		//El hash de contraseña es una forma de cifrar las contraseñas a través de una función hash criptográfica, sirve para proteger las contraseñas de usuario y
	// asegurarse de que estas nunca se almacenen en formato de texto sin cifrar en una base de datos. Para encriptra contraseñas
	// utilizamos el método de cifrado BCRYPT y con cost le indicamos el número de veces que ciframos la contraseña
	// https://www.php.net/manual/es/function.password-hash.php
	
	}

	function getRol() {
		return $this->rol;
	}

	function getImagen() {
		return $this->imagen;
	}

	function setId($id) {
		$this->id = $id;
	}

	function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre); // utilizamos real_escape_string 
		// por si el usuario introduce algún dato erróneo lo hacemos en los set en lugar de los get para que ya directamente
		// para que cuando nada más llegar el dato lo escape directamente será mejor porque los datos estarán limpios
	}

	function setApellidos($apellidos) {
		$this->apellidos = $this->db->real_escape_string($apellidos);
		// real_escape_string -- mysqli_real_escape_string — Escapa caracteres especiales en una cadena para usar en una instrucción SQL, teniendo en cuenta el juego de caracteres actual de la conexión
		//https://www.php.net/manual/en/mysqli.real-escape-string.php
	}

	function setEmail($email) {
		$this->email = $this->db->real_escape_string($email);		
	}

	function setPassword($password) {
		$this->password = $password;
	}

	function setRol($rol) {
		$this->rol = $rol;
	}

	function setImagen($imagen) {
		$this->imagen = $imagen;
	}

	// métodos que realizan acciones a la DB en base a los datos que tengo en el objeto
	//guardo toda la información del objeto en la DB
	public function save(){
		//Realizo un insert a la tabla usuarios con los valores correspondientes realizó interpolación
		//utilizando las comillas y las llaves poniendo todos los get de los atributos
		$sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', null);";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	
	public function login(){
		$result = false;
		$email = $this->email;
		$password = $this->password;
		
		// Comprobar si existe el usuario
		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
		$login = $this->db->query($sql); // accedemos a la DB y realizamos la query
	    
		if($login && $login->num_rows == 1){ // si la cantidad de registro es igual a 1 podemos verificar la 
			// contraseña
			$usuario = $login->fetch_object(); // saco el objeto que me ha devuelto la base de datos.
			
			// Verificar la contraseña
			$verify = password_verify($password, $usuario->password); //utilizo password_verify y le paso la 
			//password que me llega por el formulario sea igual a la que tengo en ld db
			
			if($verify){
				$result = $usuario; // devuelvo el objeto de usuario que he sacado de la db con todas las columnas de la db
			}
		}
		
		return $result; // lo devuelvo a falso
	}
}
?>