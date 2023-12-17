<?php if(isset($edit) && isset($pro) && is_object($pro)): ?>
	<h1>Editar producto <?=$pro->nombre?></h1>
	<?php $url_action = base_url."producto/save&id=".$pro->id; ?>
<?php else: ?>
	<h1>Crear nuevo producto</h1>
	<?php $url_action = base_url."producto/save"; ?>
<?php endif; ?>
	
<div class="form_container"> 
	
	<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>"/>

		<label for="descripcion">Descripción</label>
		<textarea name="descripcion"><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>

		<label for="precio">Precio</label>
		<input type="text" name="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"/>

		<label for="stock">Stock</label>
		<input type="number" name="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>"/>
		
		<input type="submit" value="Guardar" />
	</form>
</div>