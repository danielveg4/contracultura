<?php
session_start();

require_once '../../config/Database.php';
require_once '../../helpers/utils.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];


    if (validarCredenciales($email, $password)) {
        $_SESSION['identity'] = obtenerInformacionUsuario($email); 
        header('Location: ' . base_url.);
    } else {
        $error_message = "Incorrecto! Por favor, inténtalo de nuevo.";
    }
}

?>

<form class="submenu__login" action="<?= base_url ?>views/usuario/login.php" method="post">
    <label for="email">Email</label>
    <input type="email" name="email" required />

    <label for="password">Contraseña</label>
    <input type="password" name="password" required />

    <input class="button__enviar" type="submit" value="Login" />
</form>

