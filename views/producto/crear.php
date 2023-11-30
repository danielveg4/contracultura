<?php if(isset($edit) && isset($pro) && is_object($pro)): ?>
<!-- comprobamos si existe la variable $edi y $pro y es un objeto muestro el <h1 y ejecuto la acción save con el 
id del producto-->
	<h1>Editar producto <?=$pro->nombre?></h1>
	<?php $url_action = base_url."producto/save&id=".$pro->id; ?>
	<!-- si no directamente ejecuto guardar sin parámetro -->
<?php else: ?>
	<h1>Crear nuevo producto</h1>
	<?php $url_action = base_url."producto/save"; ?>
<?php endif; ?>
	
<div class="form_container"> <!-- creamos la clase formulario para que se apliquen los estilos css que hemos 
definido para la clase-->
	
	<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>"/>

		<label for="descripcion">Descripción</label>
		<textarea name="descripcion"><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>

		<label for="precio">Precio</label>
		<input type="text" name="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"/>

		<label for="stock">Stock</label>
		<input type="number" name="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>"/>

		<label for="categoria">Categoria</label>
		<?php $categorias = Utils::showCategorias(); ?> <!-- almaceno en la variable todas las categorias -->
		<select name="categoria">
			<?php while ($cat = $categorias->fetch_object()): ?><!-- listamos todas las categorias -->
				<option value="<?= $cat->id ?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
				<!-- comprobacion ternaria, si existe $pro y es un objeto y el $cat_id es igual a categoria_id de $pro  que imprima selected y en caso contrario
				que no imprima nada -->
					<?= $cat->nombre ?> <!-- introduzco elementos <option> en lugar de <li> le meto en value el id de categoria
						para que luego enviarlo al controlador y el controlador reciba el id de categoria que tiene que guardar
						en el campo categoria_id como algo numérico y relacione esos dos campos-->
				</option>
			<?php endwhile; ?>
		</select>
		
		<label for="imagen">Imagen</label>
		<?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
			<img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="thumb"/> 
		<?php endif; ?>
		<input type="file" name="imagen" />
		
		<input type="submit" value="Guardar" />
	</form>
</div>