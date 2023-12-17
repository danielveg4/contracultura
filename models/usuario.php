<?php

class Usuario
{
    private $id;
    private $email;
    private $password;
	
    public function getId()
    {
        return $this->id;
    }
	
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

	public function save(){
		$sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getEmail()}', '{$this->getPassword()}', 'user', null);";
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
		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
		$login = $this->db->query($sql); 
	    
		if($login && $login->num_rows == 1){ 
			$usuario = $login->fetch_object(); 
			$verify = password_verify($password, $usuario->password); 
			
			if($verify){
				$result = $usuario; 
			}
		}
		
		return $result; 
	}
}