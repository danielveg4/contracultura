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
		<div id="container">
			<!-- CABECERA -->>
			<header class="header">
        		<div class="menu__wrapper">
					<div class="menu__bar">
						<img class="menu-icon" src="<?=base_url?>assets/img/burger-menu.svg" title='Burger Menu' alt='Burger Menu'
						onclick="toggleMenu(this)">
						<ul class="navigation">
							<li>
								<a href="<?=base_url?>/articles" title="Articles">
								Artículos
								</a>
							</li>
							<li>
								<a href="paginas/index_nosotrxs.php" title="Collections">
								Consejo editorial
								</a>
							</li>
							<li>
								<a href="<?=base_url?>/shop" title="Shop">
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
					<img src="<?=base_url?>assets/img/lupa.png" alt="" />
					<img class="user-icon" src="<?=base_url?>assets/img/user.png" alt="" id="userIcon" />
					<ul class="submenu" id="submenu">
						<?php if(!isset($_SESSION['identity'])): ?> 
							<form class="submenu__login" action="#" method="post">
							<label for="email">Email</label>
							<input type="email" name="email" />
							<label for="password">Contraseña</label>
							<input type="password" name="password" />
							<input class="button__enviar" type="submit" value="Login" />
							</form>
						<?php else: ?>
							<h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
						<?php endif; ?>
						<ul> 
							<?php if(isset($_SESSION['admin'])):?>				
								<li><a href="<?=base_url?>articulo/index">Gestionar artículos</a></li>
								<li><a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
								<li><a href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
							<?php endif; ?>			
							<?php if(isset($_SESSION['identity'])): ?> 
								<li><a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
								<li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li> 
							<?php else: ?> 
								<li><a href="<?=base_url?>usuario/registro">Registrate aqui</a></li>
							<?php endif; ?> 
						</ul>
					</ul> 
				</div>

    		</header>
			<div class="header__up">
				<h1 class="header__up-name">contracultura.cc</h1>
			</div>
