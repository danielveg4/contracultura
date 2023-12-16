<h1>Subir articulos</h1>

<a href="<?=base_url?>articulo/crear" class="button button-small">
	Subir artículo
</a>

<?php while($art = $articulos->fetch_object()): ?>
	<article class="article">
		<h2><?=$art->titulo?></h2>
		<span class="date"><?=$art->fecha?></span>
		<p>
			<?=$art->descripcion?>
		</p>
		<a href="<?=base_url?>articulo/editar&id=<?=$art->id?>" class="button button-small">
			Editar
		</a>
		<a href="<?=base_url?>articulo/eliminar&id=<?=$art->id?>" class="button button-small button-red">
			Eliminar
		</a>
	</article>
<?php endwhile; ?>

