<?php

require_once 'models/Usuario.php';

class LoginController {
    public function index(){
        echo "Controlador Login, Acción index";
    }
    
    public function login(){
        if(isset($_POST)){
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']); 
            $usuario->setPassword($_POST['password']);       
            $identity = $usuario->login();       

            if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;
                
                if($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }         
            }else{
                $_SESSION['error_login'] = 'Identificación fallida !!';

            } 
        }
        header("Location:".base_url."views/usuario/login.php");
    }


    public function logout(){
        if(isset($_SESSION['identity'])){  
            unset($_SESSION['identity']);
        }
        
        if(isset($_SESSION['admin'])){ 
            unset($_SESSION['admin']);
        }
        
        header("Location:".base_url); 
    }
}