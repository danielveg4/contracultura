<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Tienda de Camisetas</title>
		<link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
	</head>
	<body>
		<div id="container">
			<!-- CABECERA -->
			<header id="header">
				<div id="logo">
					<img src="<?=base_url?>assets/img/gorra.png" alt="Gorra Logo" />
					<a href="<?=base_url?>">
						Todo Gorras su tienda de confianza
					</a>
				</div>
			</header>

			<!-- MENU -->
			<?php $categorias = Utils::showCategorias(); ?> <!-- utilizo el método que tengo puesto en 
			utilis que está dentro del helpers-->
			<nav id="menu">
				<ul>
					<li>
						<a href="<?=base_url?>">Inicio</a>
					</li>
					<?php while($cat = $categorias->fetch_object()): ?>
						<li>
							<a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
							<!-- vamos iterando para mostrar las categorias -->
						</li>
					<?php endwhile; ?>
				</ul>
			</nav>

			<div id="content">