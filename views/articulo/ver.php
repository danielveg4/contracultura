<?php if (isset($articulo)):?> 
	<div class=principal__news>
		<div class="article">
			<?php if ($articulo->imagen != null): ?>
				<img class="article__img" src="<?= base_url ?>uploads/images/<?= $articulo->imagen ?>" />
			<?php else: ?>
				<img class="article__img" src="<?= base_url ?>assets/img/marx1.jpg" />
			<?php endif; ?>
			<div class="article__info">
				<h2><?= $articulo->titulo ?></h2>
				<p><?=$articulo->texto?></p>
				<a href="" class="autor"><?=$articulo->autor?></a>
			</div>
		</div>	
	</div>
<?php else: ?>
	<h1>El artículo no existe</h1>
<?php endif; ?>



