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
	<link rel="stylesheet" href="assets\css\styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contracultura.cc</title>
  </head>
	<body>
			<!-- CABECERA -->
			<header id="header" class="header">
        		<div class="menu__wrapper">
					<div class="menu__bar">
						<img class="menu-icon" src="assets/img/burger-menu.svg" title='Burger Menu' alt='Burger Menu'
						onclick="toggleMenu(this)">
						<ul class="navigation">
							<li>
								<a href="paginas/index_articulos.php" title="Articles">
								Artículos
								</a>
							</li>
							<li>
								<a href="paginas/index_nosotrxs.php" title="Collections">
								Consejo editorial
								</a>
							</li>
							<li>
								<a href="paginas/index_shop.php" title="Shop">
								Tienda
								</a>
							</li>
						</ul>
					</div>
    			</div>
				<div class="header__start">
					<h1 class="header__name"><a href="#">contracultura.cc</a></h1>
				</div>
				<div class="header__logos">
					<img src="assets/img/contracultura.png" alt="" />
					<div class="box">
						<input
							class="search"
							placeholder=" "
							spellcheck="false"
						>
					</div>
					<img class="user-icon" src="assets/img/user.png" alt="" id="userIcon" />
					<ul class="submenu" id="submenu">
						<div id="login" class="block_central">
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
						</div>
					</ul>
				</div>
    		</header>
			<div class="header__up">
				<h1 class="header__up-name"><a href="index_maqueta.php">contracultura.cc</a></h1>
			</div>

			<!--  CONTENIDO CENTRAL -->
			<div class="principal" id="central">
				<div class=principal__news>
					<div class="article">
						<img class="article__img" src="assets/img/kautsky.jpeg" />
						<div class="article__info">
							<a class="article__link" href="paginas/art-kautsky.php">Kautsky, el socialismo y la teoría del valor (comentario)</a>
							<p>Lo que puede leerse a continuación es la traducción deuna breve reseña que Karl Kautsky publicara en Die Neue Zeit allá por 1885. Leerlo es una cuestión que apela, no tanto al imperativo de evaluarsu figura con magnanimidad una que podrá despertar las impatía de unos y el odio fulgurante de otros, sino, más bien, al rigor que se le presupone a quien se inmiscuya en el legado intelectual de una tradición de la que nos reconocemos herederos</p>
							<h4 class="autor">Álex Fernández</h4>
						</div>
					</div>	
					<div class="article">
						<img class="article__img" src="assets/img/biden.jpeg" />
						<div class="article__info">
							<a class="article__link" href="paginas/art-neokeyneisianismo.php">Las consecuencias económicas del neokeynesianismo</a>
							<p>Tras casi cuatro décadas de ideología de libre mercado, la política industrial ha regresado a Estados Unidos en forma de un presidente octogenario que apenas sabe en qué año estamos. En palabras de la administración Biden, ha llegado la hora de una «estrategia industrial americana moderna». Hace apenas cinco años, la mayoría de los políticos y expertos habrían tachado de herejía semejante política económica. Ahora todo ha cambiado.</p>

							<h4 class="autor">Jamie Merchant</h4>
						</div>
					</div>	
					<div class="article">
						<div class="article__info">
							<a class="article__link" href="paginas/art-meiksinswood.php">La separación entre economía y política en Ellen Meiksins Wood</a>
							<p>Ellen Meiksins Wood fue una de las pensadoras marxistas más importantes de su generación. Desde los años setenta hasta su muerte la autora desarrolló una obra polifacética. Su punto de partida fue la teoría política, aunque nunca se atuvo a los límites tradicionales que esta disciplina le impuso, sino que la desbordó y accedió a la sociología histórica. Pese a todo, su proyecto teórico mantuvo siempre una sorprendente coherencia.</p>
							<h4 class="autor">Javier Moreno Zacarés</h4>
						</div>
					</div>	
				</div>
				<div class="principal__sale">
					<h2>Ya está disponible el segundo número de Marx XXI!</h2>
					<div href="" class="button">
						<a href="paginas/index_shop.php" class="button__text">Compralo aquí</a>
						<img src="assets/img/carrito.png" alt="" />
					</div>
				</div>
				<div class="principal__articles">
					<a href="paginas/index_articulos.php" class="principal__articles__title">
						<h2>Artículos</h2>
					</a>
					<div class="principal__articles__line"></div>
					<div class="principal__articles__container">
						<div class="subarticle">
							<div class="subarticle__text">
								<div class="subarticle__title">
									<h3>¿Qué hacer en tiempos de debilidad?</h3>
									<p>Katja Wagner, Lukas Egger & Marco Hamann</p>
									<a class="subarticle__link" href="paginas/art-wagner.php">Léelo aquí</a>
								</div>
							</div>
							<img class="subarticle__img" src="assets/img/katja.jpeg">
						</div>
						<div class="subarticle">
						<img class="subarticle__img" src="assets/img/tronti.jpg">
							<div class="subarticle__text">
								<div class="subarticle__title">
									<h3>Arrebatar a Tronti de las garras de los 'salotti buoni'</h3>
									<p>Sergio Bologna</p>
									<a class="subarticle__link" href="paginas/art-tronti.php">Léelo aquí</a>
								</div>
							</div>
						</div>
						<div class="subarticle">
							<div class="subarticle__text">
								<div class="subarticle__title">
									<h3>La «perversa trinidad» del capitalismo tardío</h3>
									<p>Ilias Alami, Jack Copley y Alexis Moraitis</p>
									<a class="subarticle__link" href="paginas/art-alami.php">Léelo aquí</a>
								</div>
							</div>
							<img class="subarticle__img" src="assets/img/ilias.png">
						</div>
					</div>
					<a href="paginas/index_articulos.php" class="principal__articles__more">
						<h2>Leer más</h2>
						<div class="principal__articles__underline"></div>
					</a>
				</div>
				<div class="principal__collections">
					<a href="paginas/index_shop.php" class="principal__collections__title">
						<h2>Colecciones</h2>
					</a>
					<div class="principal__collections__container">
						<div class="collection">
							<div class="collection__text">
								<a class="collection__link" href="paginas/index_shop.php">Marx XXI</a>
							</div>
							<img class="collection__img" src="assets/img/marx1.jpg">
						</div>
						<div class="collection">
							<img class="collection__img" src="assets/img/coyuntura.jpg">
							<div class="collection__text">
								<a class="collection__link" href="paginas/index_shop.php">Cuadernos de Coyuntura</a>
							</div>
						</div>
						<div class="collection">
							<div class="collection__text">
								<a class="collection__link" href="paginas/index_shop.php">Ecología</a>
							</div>
							<img class="collection__img" src="assets/img/ecologia.png">
						</div>
					</div>
				</div>
			</div>

			<!-- PIE DE PÁGINA -->
			<footer class="footer" id="footer">
				<div class="footer__about">
						<div class="footer__nosotrxs">Sobre nosotrxs</div>
						<div class="footer__redes">
							<a href="https://twitter.com/ctrcultura"><img src="assets/img/twitter.png" alt=""></a>
							<a href="https://www.instagram.com/ctrcultura/"><img src="assets/img/instagram.png" alt=""></a>
							<a href="https://www.youtube.com/channel/UCn5WOCIpPjfzHLxYlhw1aeg"><img src="assets/img/youtube.png" alt=""></a>
						</div>
				</div>
				<div class="footer__line"></div>
				<div class="footer__text">
					<p>Contracultura es un medio de divulgación y producción teórica con la intención de poder ser leído por amplias capas de la sociedad sin perder ni un ápice de rigor académico. Nuestro equipo gestor está conformado por estudiantes de posgrado del ámbito de la Ciencia Política y estudiantes egresados de grados universitarios como Ciencias Políticas, Economía y Psicología.</p>
				</div>
				<div class="footer__us">
					<a href="paginas/index_nosotrxs.php" class="footer__us-text">Consejo editorial</a>
					<a href="paginas/contacto.php" class="footer__us-text">Contacto</a>
					<a href="paginas/colabora.php" class="footer__us-text">Colabora</a>
					<a href="paginas/index_shop.php" class="footer__us-text">Tienda online</a>
					<a href="paginas/index_librerias.php" class="footer__us-text">Librerias colaboradoras</a>
				</div>
				<div class="footer__final">				
				<p class="footer__name">En Contracultura creemos en el libro flujo de la información. Puede republicar nuestros artículos libremente, de manera impresa o digital, bajo la licencia Creative Commons. &copy; <?= date('Y') ?></p>
				</div>
			</footer>
		<script src="js/index.js"></script>
	</body>
</html>