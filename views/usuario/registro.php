<h1>Registrarse</h1>

<!--mostramos la sesión que se ha creado-->
<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
	<strong class="alert_green">Registro completado correctamente</strong>
	<!-- si se ha completado el registro correctamente-->
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
	<strong class="alert_red">Registro fallido, introduce bien los datos</strong>
	<!-- en caso contrario muestro este mensaje-->
<?php endif; ?> <!-- sintaxis especial para vistas de php-->
<?php Utils::deleteSession('register'); ?> <!--eliminamos la sesión para que al recargar la página no nos 
muestre los mensajes anteriores-->
<!--creamos el formulario-->
<form action="<?=base_url?>usuario/save" method="POST">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required/>
	
	<label for="apellidos">Apellidos</label>
	<input type="text" name="apellidos" required/>
	
	<label for="email">Email</label>
	<input type="email" name="email" required/>
	
	<label for="password">Contraseña</label>
	<input type="password" name="password" required/>
	
	<input type="submit" value="Registrarse" />
</form>