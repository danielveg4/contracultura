<h1>Gestionar categorias</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">
	Crear categoria
</a>

<table> <!-- Tabla de html para que se vea mejor -->
	<tr> <!--tr para cada fila -->
		<th>ID</th> <!-- th para encabezados de tabla-->
		<th>NOMBRE</th>
	</tr>
	<?php while($cat = $categorias->fetch_object()):
		// ralizo un bucle que creo una variable cat en cada iteración que haga de categorias y utilizo el método fetch_object
		// itero por todos los objetos para ir mostrando todo el array de categorias ?>
		<tr>
			<td><?=$cat->id;?></td> <!-- td por cada columna de la tabla -->
			<td><?=$cat->nombre;?></td>
		</tr>
	<?php endwhile; ?>
</table>
