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
	<link rel="stylesheet" href="..\assets\css\styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contracultura.cc</title>
  </head>
	<body>
		<div id="container">
			<!-- CABECERA -->>
			<header id="header" class="header">
        		<div class="menu__wrapper">
					<div class="menu__bar">
						<img class="menu-icon" src="../assets/img/burger-menu.svg" title='Burger Menu' alt='Burger Menu'
						onclick="toggleMenu(this)">
						<ul class="navigation">
							<li>
								<a href="index_articulos.php" title="Articles">
								Artículos
								</a>
							</li>
							<li>
								<a href="index_nosotrxs.php" title="Collections">
								Consejo editorial
								</a>
							</li>
							<li>
								<a href="index_shop.php" title="Shop">
								Tienda
								</a>
							</li>
						</ul>
					</div>
    			</div>
				<div class="header__start">
					<h1 class="header__name"><a href="index_maqueta.php">contracultura.cc</a></h1>
				</div>
				<div class="header__logos">
					<img src="../assets/img/contracultura.png" alt="" />
					<img src="../assets/img/lupa.png" alt="" />
					<img class="user-icon" src="../assets/img/user.png" alt="" id="userIcon" />
					<ul class="submenu" id="submenu">
						<form class="submenu__login" action="#" method="post">
							<label for="email">Email</label>
							<input type="email" name="email" />
							<label for="password">Contraseña</label>
							<input type="password" name="password" />
							<input class="button__enviar" type="submit" value="Login" />
						</form>
						<ul class="submenu__pedidos">
							<li><a href="#">Mis pedidos</a></li>
						</ul>
					</ul>
				</div>
    		</header>
			<div class="header__up">
				<h1 class="header__up-name"><a href="index_maqueta.php">contracultura.cc</a></h1>
			</div>

			<!--  CONTENIDO CENTRAL -->
			<div class="colabora__principal">
                <div class="colabora__principal__title">
                    <h1>Contacta con nosotrxs</h1>
                </div>

                <div class="contact__container">

                <section class="form">
                    <form action="correo.php" method="post">
                        <label class="form-control__label" for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                        <label class="form-control__label">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                        <label for="mensaje" class="form-control__label">Mensaje</label>
                        <textarea class="form-control-msg" id="mensaje" name="mensaje" rows="4" required></textarea>
                        <button type="submit" class="form__submit" id="submit">Enviar Mensaje</button>
                    </form>
                </section>
                
                <section class="form__animation">
                    <div id="ball">
                        <div class="ball">
                            <div id="face">
                                <div class="ball__eyes">
                                    <div class="eye_wrap"><span class="eye"></span></div>
                                    <div class="eye_wrap"><span class="eye"></span></div>
                                </div>
                                <div class="ball__mouth"></div>
                            </div>
                        </div>
                    </div>
                    <div class="ball__shadow"></div>
                </section>

                </div>

            </div>

			<!-- PIE DE PÁGINA -->
			<footer class="footer" id="footer">
				<div class="footer__about">
						<h3>Sobre nosotrxs</h2>
						<div class="footer__redes">
							<a href=""><img src="../assets/img/twitter.png" alt=""></a>
							<a href=""><img src="../assets/img/instagram.png" alt=""></a>
							<a href=""><img src="../assets/img/youtube.png" alt=""></a>
						</div>
				</div>
				<div class="footer__line"></div>
				<div class="footer__text">
					<p>Contracultura es un medio de divulgación y producción teórica con la intención de poder ser leído por amplias capas de la sociedad sin perder ni un ápice de rigor académico. Nuestro equipo gestor está conformado por estudiantes de posgrado del ámbito de la Ciencia Política y estudiantes egresados de grados universitarios como Ciencias Políticas, Economía y Psicología.</p>
				</div>
				<div class="footer__us">
					<a href="index_nosotrxs.php" class="footer__us-text">Consejo editorial</a>
					<a href="contacto.php" class="footer__us-text">Contacto</a>
					<a href="colabora.php" class="footer__us-text">Colabora</a>
					<a href="index_shop.php" class="footer__us-text">Tienda online</a>
					<a href="index_shop.php" class="footer__us-text">Librerias colaboradoras</a>
				</div>
				<div class="footer__final">				
				<p class="footer__name">En Contracultura creemos en el libro flujo de la información. Puede republicar nuestros artículos libremente, de manera impresa o digital, bajo la licencia Creative Commons. &copy; <?= date('Y') ?></p>
				</div>
			</footer>
		</div>
		<script src="..\js\index.js"></script>
	</body>
</html>