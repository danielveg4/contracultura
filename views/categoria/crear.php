<h1>Crear nueva categoria</h1>
<!--creo mi formulario y le asigno que me lleve al controlador de categorias y a la acción save que será un método 
que creare en el controlador -->
<form action="<?=base_url?>categoria/save" method="POST">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required/>
	<!-- creo los campos y el botón -->
	<input type="submit" value="Guardar" />
</form>