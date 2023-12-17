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
			<div class="header__up">
				<h1 class="header__up-name"><a href="index_maqueta.php">contracultura.cc</a></h1>
			</div>

			<!--  CONTENIDO CENTRAL -->
			<div class="principal" id="central">
				<div class=principal__news>
					<div class="article">
						<img class="article__img" src="../assets/img/kautsky.jpeg" />
						<div class="article__info">
							<a class="article__link" href="art-kautsky.php">Kautsky, el socialismo y la teoría del valor (comentario)</a>
							<p>Lo que puede leerse a continuación es la traducción deuna breve reseña que Karl Kautsky publicara en Die Neue Zeit allá por 1885. Leerlo es una cuestión que apela, no tanto al imperativo de evaluarsu figura con magnanimidad una que podrá despertar las impatía de unos y el odio fulgurante de otros, sino, más bien, al rigor que se le presupone a quien se inmiscuya en el legado intelectual de una tradición de la que nos reconocemos herederos</p>
							<h4 class="autor">Álex Fernández</h4>
						</div>
					</div>	
					<div class="article">
						<img class="article__img" src="../assets/img/biden.jpeg" />
						<div class="article__info">
							<a class="article__link" href="art-neokeyneisianismo.php">Las consecuencias económicas del neokeynesianismo</a>
							<p>Tras casi cuatro décadas de ideología de libre mercado, la política industrial ha regresado a Estados Unidos en forma de un presidente octogenario que apenas sabe en qué año estamos. En palabras de la administración Biden, ha llegado la hora de una «estrategia industrial americana moderna». Hace apenas cinco años, la mayoría de los políticos y expertos habrían tachado de herejía semejante política económica. Ahora todo ha cambiado.</p>
							<h4 class="autor">Jamie Merchant</h4>
						</div>
					</div>	
				</div>
				<div class=principal__news>
					<div class="article">
							<img class="article__img" src="../assets/img/ellen.jpeg" />
							<div class="article__info">
								<a class="article__link" href="art-meiksinswood.php">La separación entre economía y política en Ellen Meiksins Wood</a>
								<p>Ellen Meiksins Wood fue una de las pensadoras marxistas más importantes de su generación. Desde los años setenta hasta su muerte la autora desarrolló una obra polifacética. Su punto de partida fue la teoría política, aunque nunca se atuvo a los límites tradicionales que esta disciplina le impuso, sino que la desbordó y accedió a la sociología histórica. Pese a todo, su proyecto teórico mantuvo siempre una sorprendente coherencia.</p>

								<h4 class="autor">Javier Moreno Zacarés</h4>
							</div>
						</div>
					<div class="article">
						<img class="article__img" src="../assets/img/tronti2.png" />
							<div class="article__info">
								<a class="article__link" href="art-tronti.php">Arrebatar a Tronti de las garras de los salotti buoni</a>
								<p>Mario Tronti falleció el 7 de agosto, y se han escrito numerosos obituarios, recuerdos y testimonios. Le han nombrado “un gigante”, el “padre del operaísmo”… cierto. Sin embargo, cuando nosotros hablamos de operaísmo y, por tanto, inevitablemente, de él, lo que nos viene a la mente no son cátedras universitarias, seminarios, conferencias, mesas redondas, audífonos compactos, reseñas, nos vienen a la mente asambleas de trabajadores, piquetes duros, empujones incluso entre camaradas... </p>
								<h4 class="autor">Pepe del Amo (Traducción)</h4>
							</div>
					</div>
				</div>
				<div class=principal__news>
					<div class="article">
						<img class="article__img" src="../assets/img/katja.jpeg" />
						<div class="article__info">
							<a class="article__link" href="art-wagner.php">¿Qué hacer en tiempos de debilidad?</a>
							<p>Katja Wagner, Lukas Egger & Marco Hamann Nota introductoria: en octubre de 2021 se inició en el denominado “medio social revolucionario” alemán, a través del blog Communaut, un amplio debate sobre estrategia y organización comunista. Esta fue la primera de las aportaciones que animó dicho debate. La misma fue traducida en su día por Freno de Emergencia. Y a esta le sucedieron otras 8 aportaciones más, las cuales pueden encontrarse todas traducidas en el blog Abwerten. </p>
							<h4 class="autor">Katja Wagner, Lukas Egger & Marco Hamann</h4>
						</div>
					</div>	
					<div class="article">
						<img class="article__img" src="../assets/img/ilias.png" />
						<div class="article__info">
							<a class="article__link" href="art-alami.php">La «perversa trinidad» del capitalismo tardío</a>
							<p>«La política climática mundial […] es probablemente el único ámbito político que no afecta al clima», observa Tadzio Müller, cofundador del movimiento alemán por la justicia climática Ende Gelände. En su hipérbole, este comentario apunta hacia una verdad crucial: en los más de treinta años transcurridos desde la creación de la Convención Marco de las Naciones Unidas sobre el Cambio Climático, los Estados han fracasado rotundamente a la hora de detener el implacable ascenso de las emisiones mundiales de carbono</p>

							<h4 class="autor">Ilias Alami</h4>
						</div>
					</div>	
				</div>
				<div class=principal__news>
					<div class="article">
						<img class="article__img" src="../assets/img/autonomia.png" />
						<div class="article__info">
							<a class="article__link">¿Un Partido de la Autonomía?</a>
							<p>Este capítulo busca explorar, de forma crítica, el debate que tuvo lugar sobre la forma-partido en el seno y alrededor de los grupos de la Autonomía Operaia   a final de los años setenta, cuando dicha área de políticas revolucionarias fue, durante un breve periodo de tiempo, la fuerza dominante entre la extrema izquierda italiana. Habiendo asumido un rol de liderazgo durante las primeras etapas del extraño movimiento de extraños estudiantes del 1977, los autónomos italianos finalmente encontraron un espacio multitudinario para el debate sobre el significado y propósito de la organización política.</p>
							<h4 class="autor">Pepe Del Amo (Traducción)</h4>
						</div>
					</div>	
					<div class="article">
						<img class="article__img" src="../assets/img/lavoro.jpeg" />
						<div class="article__info">
							<a class="article__link">Sobre la lucha por el salario y la nueva subjetividad obrera</a>
							<p>El presente artículo es una traducción de la revista Lavoro Zero, un volante informativo publicado en de Porto Marghera, uno de los muchos centros industriales que existían en la Italia de esos años pero que constituye una de las experiencias políticas de base decisivas del largo 68 italiano junto con la FIAT de Turín y la Pirelli en Milán, el cual comenzó su andanza entre 1973-1974, sirviendo órgano de expresión de la asamblea de lucha del centro petroquímico, para después durante 1976-1979 convertirse en el giornale comunista del Veneto. </p>
							<h4 class="autor">Lavoro Zero</h4>
						</div>
					</div>	
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
					<p>Contracultura es..........................blablablao que puede leerse a continuación es la traducción de una breve reseña que Karl Kautsky publicara en Die Neue Zeit allá por 1885. Leerlo es una cuestión que apela, no tanto al imperativo de evaluar su figura con magnanimidad -una que podrá despertar la simpatía de unos y el odio fulgurante de otros-, sino, más bien, al rigor que se le presupone a cualquiera que se inmiscuya en el legado intelectual de una tradición de la que nos reconocemos herederos.</p>
				</div>
				<div class="footer__us">
					<a href="index_nosotrxs.php" class="footer__us-text">Consejo editorial</a>
					<a href="contacto.php" class="footer__us-text">Contacto</a>
					<a href="colabora.php" class="footer__us-text">Colabora</a>
					<a href="index_shop.php" class="footer__us-text">Tienda online</a>
					<a href="index_librerias.php" class="footer__us-text">Librerias colaboradoras</a>
				</div>
				<div class="footer__final">				
					<p>Contracultura es un medio de divulgación y producción teórica con la intención de poder ser leído por amplias capas de la sociedad sin perder ni un ápice de rigor académico. Nuestro equipo gestor está conformado por estudiantes de posgrado del ámbito de la Ciencia Política y estudiantes egresados de grados universitarios como Ciencias Políticas, Economía y Psicología.</p>
				</div>
			</footer>
		</div>
		<script src="..\js\index.js"></script>
	</body>
</html>