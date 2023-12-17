<?php

require_once 'models/Usuario.php';

class UsuarioController{

    public function registro(){
        require_once 'views/usuario/registro.php';
    }

//método para guardar los datos del usuario
public function save(){
    if(isset($_POST)){
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;

        if($nombre && $apellidos && $email && $password){
            $usuario = new Usuario();
            $usuario->setEmail($email);
            $usuario->setPassword($password);

            $save = $usuario->save();
            if($save){
                $_SESSION['register'] = "complete";
            }else{
                $_SESSION['register'] = "failed";
            }
        }else{
            $_SESSION['register'] = "failed";
        }
    }else{
        $_SESSION['register'] = "failed";
    }
    header("Location:".base_url.'views/usuario/registro.php');
}
}