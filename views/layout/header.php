<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Encode+Sans+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/svg+xml" href="" />
	<link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contracultura.cc</title>
  </head>
	<body>
		
			<!-- CABECERA -->>
			<header class="header">
        		<div class="menu__wrapper">
					<div class="menu__bar">
						<img class="menu-icon" src="<?=base_url?>assets/img/burger-menu.svg" title='Burger Menu' alt='Burger Menu'
						onclick="toggleMenu(this)">
						<ul class="navigation">
							<li>
								<a href="<?=base_url?>paginas/index_articulos.php" title="Articles">
								Artículos
								</a>
							</li>
							<li>
								<a href="<?=base_url?>paginas/index_nosotrxs.php" title="us">
								Consejo editorial
								</a>
							</li>
							<li>
								<a href="<?=base_url?>paginas/index_tienda.php" title="tienda">
								Tienda
								</a>
							</li>
						</ul>
					</div>
    			</div>
				<div class="header__start">
					<h1 class="header__name">contracultura.cc</h1>
				</div>
				<div class="header__logos">
					<img src="<?=base_url?>assets/img/contracultura.png" alt="" />
					<div class="box">
						<input
							class="search"
							placeholder=" "
							spellcheck="false"
						>
					</div>
					<img class="user-icon" src="<?=base_url?>assets/img/user.png" alt="" id="userIcon" />
					<ul class="submenu" id="submenu">
						<div id="login" class="block_central">
							<?php if(!isset($_SESSION['identity'])): ?> 
								<form class="submenu__login" action="<?= base_url ?>usuario/login" method="post">
									<label for="email">Email</label>
									<input type="email" name="email" />
									<label for="password">Contraseña</label>
									<input type="password" name="password" />
									<input class="button__enviar" type="submit" value="Login" />
								</form>
							<?php else: ?>
								<h3><?=$_SESSION['identity']->email?></h3>
							<?php endif; ?>
							<ul> 
								<?php if(isset($_SESSION['admin'])):?>				
									<li><a href="<?=base_url?>Producto/gestion">Gestionar productos</a></li>
									<li><a href="<?=base_url?>Pedido/gestion">Gestionar pedidos</a></li>
									<li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
								<?php endif; ?>			
								<?php if(isset($_SESSION['identity'])): ?> 
									<a href="<?=base_url?>views/carrito.php">Ver Carrito</a>
									<li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li> 
								<?php else: ?> 
									<li><a href="<?= base_url ?>usuario/registro">Regístrate aquí</a></li>
								<?php endif; ?> 
							</ul>
						</div>
					</ul> 
				</div>

    		</header>
			<div class="header__up">
				<h1 class="header__up-name">contracultura.cc</h1>
			</div>
