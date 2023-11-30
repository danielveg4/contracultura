<!-- BARRA LATERAL -->
<aside id="lateral">

	<div id="carrito" class="block_aside">
		<h3>Mi carrito</h3>
		<ul>
			<?php $stats = Utils::statsCarrito(); ?>
			<li><a href="<?=base_url?>carrito/index">Productos (<?=$stats['count']?>)</a></li>
			<li><a href="<?=base_url?>carrito/index">Total: <?=$stats['total']?> $</a></li>
			<li><a href="<?=base_url?>carrito/index">Ver el carrito</a></li>
		</ul>
	</div>
	
	<div id="login" class="block_aside">
		
		<?php if(!isset($_SESSION['identity'])): ?> <!-- si no existe muestra para loguearse-->
			<h3>Entrar a la web</h3>
			<!-- establezco la action donde lleva el formulario, constante base url y le concateno usuario login
		esta ruta se genera con la base_url y la acción en este caso método login--> 
			<form action="<?=base_url?>usuario/login" method="post">
				<label for="email">Email</label>
				<input type="email" name="email" />
				<label for="password">Contraseña</label>
				<input type="password" name="password" />
				<input type="submit" value="Enviar" />
			</form>
		<?php else: ?><!-- en caso contrario muestro el nombre y apellidos de que está logeado -->
			<h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
		<?php endif; ?>

		<ul> 
			<?php if(isset($_SESSION['admin'])):?>				
			<!-- en función del tipo de usuario le aparecerán ciertos enlaces-->
				<li><a href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
				<li><a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
				<li><a href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
			<?php endif; ?>			
			<?php if(isset($_SESSION['identity'])): ?> <!-- si el usuario está identificado sea cual sea mostrará
				lo siguiente-->
				<li><a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
				<li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li> 
				<!-- apunta base_url controlador de usuario acción logout que sería donde controlaríamos el 
				cierre de la sesión -->
			<?php else: ?> 
				<li><a href="<?=base_url?>usuario/registro">Registrate aqui</a></li>
			<?php endif; ?> 
		</ul>
	</div>

</aside>

<!-- CONTENIDO CENTRAL -->	
<div id="central">
	
