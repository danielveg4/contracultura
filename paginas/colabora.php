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
			<!-- CABECERA -->
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
								<a href="index_tienda.php" title="Shop">
								Tienda
								</a>
							</li>
						</ul>
					</div>
    			</div>
				<div class="header__up">
					<h1 class="header__up-name"><a href="index_maqueta.php">contracultura.cc</a></h1>
				</div>
				<div class="header__logos">
					<div class="box">
						<input
							class="search"
							placeholder=" "
							spellcheck="false"
						>
					</div>
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

			<!--  CONTENIDO CENTRAL -->
			<div class="colabora__principal">
                <div class="colabora__principal__title">
                    <h1>Colabora con nosotrxs</h1>
                </div>
                <div class="colabora__principal__text">
                    <p>¿Tienes un artículo y quieres publicarlo en nuestro espacio? Puedes colaborar con nosotros mandándolo a ctrcultura.info@gmail.com siguiendo estos requisitos:</p>
                    <ul class="colabora__principal__list">
                        <li>En el email el asunto del correo debe indicar el nombre del autor y título del artículo, junto a una fotografía o idea de imagen destacada.</li>
                        <li>Archivo: formato Word (.doc o .docx)</li>
                        <li>Incluir un resumen (extensión breve) previo al texto, sobre la idea que se trabaja en el artículo.</li>
                        <li>Incluir nombre completo del autor o seudónimo, estudios y/u otras colaboraciones, y enlace a sus redes sociales</li>
                        <li>Tipografía: Times New Roman 12</li>
                        <li>Interlineado: 1,5</li>
                        <li>Referencias bibliográficas: se puede citar tanto en el texto como a pie de página, no importa siempre que el formato sea coherente y no haya variaciones en el texto.</li>
                        <li>La extensión para los artículos de opinión es de entre 3 y 4 páginas, y para los de divulgación y análisis de entre 5 y 6.</li>
                    </ul>
                </div>
            </div>


			<!-- PIE DE PÁGINA -->
			<footer class="footer" id="footer">
				<div class="footer__about">
						<h3>Sobre nosotrxs</h2>
						<div class="footer__redes">
							<a href="https://twitter.com/ctrcultura"><img src="../assets/img/twitter.png" alt=""></a>
							<a href="https://www.instagram.com/ctrcultura/"><img src="../assets/img/instagram.png" alt=""></a>
							<a href="https://www.youtube.com/channel/UCn5WOCIpPjfzHLxYlhw1aeg"><img src="../assets/img/youtube.png" alt=""></a>
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
					<a href="index_tienda.php" class="footer__us-text">Tienda online</a>
					<a href="index_librerias.php" class="footer__us-text">Librerias colaboradoras</a>
				</div>
				<div class="footer__final">				
				<p class="footer__name">En Contracultura creemos en el libro flujo de la información. Puede republicar nuestros artículos libremente, de manera impresa o digital, bajo la licencia Creative Commons. &copy; <?= date('Y') ?></p>
				</div>
			</footer>
		</div>
		<script src="..\js\index.js"></script>
	</body>
</html>