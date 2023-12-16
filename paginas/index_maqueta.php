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
						<img class="menu-icon" src="assets/img/burger-menu.svg" title='Burger Menu' alt='Burger Menu'
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
					<h1 class="header__name"><a href="#">contracultura.cc</a></h1>
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
			<div class="principal" id="central">
				<div class=principal__news>
					<div class="article">
						<img class="article__img" src="../assets/img/kautsky.jpeg" />
						<div class="article__info">
							<h2>Kautsky, el socialismo y la teoría del valor (comentario)</h2>
							<p>Lo que puede leerse a continuación es la traducción deuna breve reseña que Karl Kautsky publicara en Die Neue Zeit allá por 1885. Leerlo es una cuestión que apela, no tanto al imperativo de evaluarsu figura con magnanimidad una que podrá despertar las impatía de unos y el odio fulgurante de otros, sino, más bien, al rigor que se le presupone a quien se inmiscuya en el legado intelectual de una tradición de la que nos reconocemos herederos</p>
							<a href="" class="autor">Álex Fernández</a>
						</div>
					</div>	
					<div class="article">
						<img class="article__img" src="../assets/img/biden.jpeg" />
						<div class="article__info">
							<h2>Las consecuencias económicas del neokeynesianismo</h2>
							<p>Tras casi cuatro décadas de ideología de libre mercado, la política industrial ha regresado a Estados Unidos en forma de un presidente octogenario que apenas sabe en qué año estamos. En palabras de la administración Biden, ha llegado la hora de una «estrategia industrial americana moderna». Hace apenas cinco años, la mayoría de los políticos y expertos habrían tachado de herejía semejante política económica.</p>

							<a href="" class="autor">Jamie Merchant</a>
						</div>
					</div>	
					<div class="article">
						<div class="article__info">
							<h2>La separación entre economía y política en Ellen Meiksins Wood</h2>
							<p>Ellen Meiksins Wood fue una de las pensadoras marxistas más importantes de su generación. Desde los años setenta hasta su muerte en el 2016, la autora desarrolló una obra polifacética. Su punto de partida fue la teoría política, aunque nunca se atuvo a los límites tradicionales que esta disciplina le impuso, sino que la desbordó y accedió a la sociología histórica, entrando así de lleno en el campo de la crítica social. Pese a todo, su proyecto teórico mantuvo siempre una sorprendente coherencia.</p>

							<a href="" class="autor">Javier Moreno Zacarés</a>
						</div>
					</div>	
				</div>
				<div class="principal__sale">
					<h2>Ya está disponible el segundo número de Marx XXI!</h2>
					<div href="" class="button">
						<p class="button__text">Compralo aquí</p>
						<img src="../assets/img/carrito.png" alt="" />
					</div>
				</div>
				<div class="principal__articles">
					<div class="principal__articles__title">
						<h2>Artículos</h2>
					</div>
					<div class="principal__articles__line"></div>
					<div class="principal__articles__container">
						<div class="subarticle">
							<div class="subarticle__text">
								<div class="subarticle__title">
									<h3>¿Qué hacer en tiempos de debilidad?</h3>
									<p>Katja Wagner, Lukas Egger & Marco Hamann</p>
								</div>
							</div>
							<img class="subarticle__img" src="../assets/img/katja.jpeg">
						</div>
						<div class="subarticle">
						<img class="subarticle__img" src="../assets/img/tronti.jpg">
							<div class="subarticle__text">
								<div class="subarticle__title">
									<h3>Arrebatar a Tronti de las garras de los 'salotti buoni'</h3>
									<p>Sergio Bologna</p>
								</div>
							</div>
						</div>
						<div class="subarticle">
							<div class="subarticle__text">
								<div class="subarticle__title">
									<h3>La «perversa trinidad» del capitalismo tardío</h3>
									<p>Ilias Alami, Jack Copley y Alexis Moraitis</p>
								</div>
							</div>
							<img class="subarticle__img" src="../assets/img/ilias.png">
						</div>
					</div>
					<div class="principal__articles__more">
						<h2>Leer más</h2>
						<div class="principal__articles__underline"></div>
					</div>
				</div>
				<div class="principal__collections">
					<div class="principal__collections__title">
						<h2>Colecciones</h2>
					</div>
					<div class="principal__collections__container">
						<div class="collection">
							<div class="collection__text">
								<h3>Marx XXI</h3>
							</div>
							<img class="collection__img" src="../assets/img/marx1.jpg">
						</div>
						<div class="collection">
							<img class="collection__img" src="../assets/img/coyuntura.jpg">
							<div class="collection__text">
								<h3>Cuadernos de Coyuntura</h3>
							</div>
						</div>
						<div class="collection">
							<div class="collection__text">
								<h3>Ecología</h3>
							</div>
							<img class="collection__img" src="../assets/img/ecologia.png">
						</div>
					</div>
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
		<script src="js/index.js"></script>
	</body>
</html>