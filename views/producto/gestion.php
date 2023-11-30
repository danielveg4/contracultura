<h1>Gestión de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small"> <!-- establecemos un botón para crear el producto-->
	Crear producto
</a>
<!--Mostramos si se ha creado correctamente o no el producto y mostramos mensaje de la sesión producto con completa o distinto de completa
que hemos almacenado en el ProductController.php en el método save, borramos la sesión para que
no permanezcan los mensajes y podamos seguir creando productos-->

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
	<strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>	
	<strong class="alert_red">El producto NO se ha creado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>

<!--Mostramos si se ha borrado correctamente o no el producto y mostramos mensaje de la sesión delete con completa o distinto de completa
que hemos almacenado en el ProductController.php en el método eliminar, borramos la sesión para que
no permanezcan los mensajes y podamos seguir borrando productos-->

<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
	<strong class="alert_green">El producto se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>	
	<strong class="alert_red">El producto NO se ha borrado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>
<!-- mostramos los datos en una tabla-->
<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>PRECIO</th>
		<th>STOCK</th>
		<th>ACCIONES</th> <!-- para mostrar las acciones-->
	</tr>
	<?php while($pro = $productos->fetch_object()): ?> <!-- recorremos el array de objetos y los mostramos -->
		<tr>
			<td><?=$pro->id;?></td>
			<td><?=$pro->nombre;?></td>
			<td><?=$pro->precio;?></td>
			<td><?=$pro->stock;?></td>
			<td> <!--añadimos dos botones enlazados los métodos editar y eliminar-->
				<a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="button button-gestion">Editar</a>
				<!-- utilizamos & en lugar de ? para pasarles los dos parámetros puesto que no son el primer parámetro que le pasamos 
				a la url sino el segundo o tercer parámetro-->
				<a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="button button-gestion button-red">Eliminar</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>
