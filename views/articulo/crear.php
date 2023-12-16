<h1>Subir nuevo artículo</h1>

<form action="<?=base_url?>articulo/save" method="POST">
	<label for="titulo">Título</label>
	<input type="text" name="titulo" required/>
	<label for="texto">Texto</label>
	<input type="text" name="texto" required/>
	<label for="autor">Autor</label>
	<input type="text" name="autor" required/>
	<label for="imagen">Imagen</label>
	<input type="file" name="imagen" required/>
	<input type="submit" value="Guardar" />
</form>