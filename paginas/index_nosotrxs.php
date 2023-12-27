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
			<div class="us__principal">
                <div class="us__principal__title">
                    <h1>Consejo editorial</h1>
                </div>
                <div class="us__text">
				    <div class="us__texto">Contracultura es un medio de divulgación y producción teórica con la intención de poder ser leído por amplias capas de la sociedad sin perder ni un ápice de rigor académico. Nuestro equipo gestor está conformado por estudiantes de posgrado del ámbito de la Ciencia Política y estudiantes egresados de grados universitarios como Ciencias Políticas, Economía y Psicología.</div>
                    <div class="us__texto">Apostamos por la creación de un espacio de debate donde haya gran pluralidad de temas y posturas diferenciadas, pero tratadas con el mayor rigor y honestidad intelectual posible. Nuestra aspiración es convertirnos en un medio multiplataforma que pueda crear contenido de todo tipo y transmitir así nuestra visión, aportando ideas al debate público.</div>
                </div>
            </div>
            <div class="us__authors">
            <section class="us__author">
                <div class="us__author__img">
                    <img src="../assets/img/aupablo.jpg" alt="autor1" />
                </div>
                <div class="us__author__content">
                    <h2 class="us__author__name">Pablo González</h2>
                    <p class="us__author__text">Graduado en Ciencia Política y Administración Pública por la Universidad de Salamanca (2019), realizó el Máster en Ciencia Política por la misma casa (2020) y es actualmente estudiante de doctorado en Ciencia Política. Junto al resto de compañeros fundó Contracultura en 2018, buscando ampliar sus propias miras.</p>
                    <p class="us__author__text">Sus intereses de investigación giran en torno al comportamiento político y electoral, las redes sociales y el populismo, y el radicalismo político.</p>
                </div>
            </section>
            <section class="us__author">
            <div class="us__author__img">
                    <img src="../assets/img/auiker.jpg" alt="autor1" />
                </div>
                <div class="us__author__content">
                    <h2 class="us__author__name">Iker Madrid</h2>
                    <p class="us__author__text">Graduado en Ciencias Políticas y Gestión Pública por la Universidad del País Vasco (UPV/EHU). Realizó el Máster Interuniversitario en Historia Contemporánea y actualmente es doctorando en Historia Contemporánea. Co-fundó Contracultura en septiembre de 2018 en aras de conectar la investigación académica con las problemáticas sociales.</p>
                    <p class="us__author__text">Sus intereses académicos pasan, entre otros ámbitos, por el estudio del tardofranquismo, el mundo del trabajo, el papel de las redes sociales en la sociedad o el marxismo.</p>
                </div>
            </section>
            <section class="us__author">
                <div class="us__author__img">
                    <img src="../assets/img/aumario.jpg" alt="autor1" />
                </div>
                <div class="us__author__content">
                    <h2 class="us__author__name">Mario Hortal</h2>
                    <p class="us__author__text">Graduado en Ciencias Políticas y Gestión Pública por la Universidad del País Vasco (UPV/EHU) y actualmente estudiante del Máster de Globalización y Desarrollo del Instituto Hegoa (UPV/EHU). Tras esto ha estado trabajado en consultoría e investigación social, donde se encuentra actualmente. Apasionado por la política, la sociología y la psicología social, además de aficionado a la historia. Co-fundó Contracultura en septiembre de 2018 en aras de conectar la investigación académica con las problemáticas sociales.</p>
                </div>
            </section>
            <section class="us__author">
                <div class="us__author__img">
                    <img src="../assets/img/aumanuel.jpg" alt="autor1" />
                </div>
                <div class="us__author__content">
                    <h2 class="us__author__name">Manuel Buñuel</h2>
                    <p class="us__author__text">Graduado en Ciencias Políticas y de la Administración por la Universidad Pablo de Olavide en 2018 y realizó el Máster en Sociedad, Administración y Política también en la Universidad Pablo de Olavide. Ha realizado prácticas en organismos públicos y partidos políticos. A raíz de la ampliación de Contracultura y su interés por la web se unió al equipo gestor en Septiembre de 2019.</p>
                    <p class="us__author__text">Sus intereses personales y académicos pasan por todo lo relacionado con las diversas corrientes de pensamiento derechista y autoritario, desde el fascismo histórico hasta los nuevos movimientos populistas europeos de corte nacionalista; los procesos de radicalización ideológica y los procesos políticos europeos.</p>
                </div>
            </section>
            <section class="us__author">
                <div class="us__author__img">
                    <img src="../assets/img/augon.jpg" alt="autor1" />
                </div>
                <div class="us__author__content">
                    <h2 class="us__author__name">Gonzalo Gallardo</h2>
                    <p class="us__author__text">Graduado en Derecho y Ciencias Políticas por la Universidad Autónoma de Madrid, estudia el Máster de Filosofía de la Historia en la misma institución. Se unió al equipo cogestor en junio de 2020.</p>
                    <p class="us__author__text">Sus inquietudes intelectuales se mueven sobre todo en la filosofía y la teoría política, con especial interés en la articulación del movimiento obrero, sus experiencias históricas revolucionarias y la influencia de las nuevas tecnologías en ellas.</p>
                </div>
            </section>
            <section class="us__author">
                <div class="us__author__img">
                    <img src="../assets/img/aupepe.jpg" alt="autor1" />
                </div>
                <div class="us__author__content">
                    <h2 class="us__author__name">José del Amo</h2>
                    <p class="us__author__text">Se graduó en Economía por la Universidad Autónoma de Madrid en la especialidad de Economía Política e Institucional. Desarrolla su carrera profesional en el ámbito de la cooperación al desarrollo habiendo coordinado proyectos de economía sostenible. Empezó a militar en asambleas estudiantiles hasta hoy, que forma parte de un colectivo anticapitalista del barrio de Arganzuela en Madrid. Se unió como cogestor de Contracultura en junio de 2020.</p>
                    <p class="us__author__text">Sus intereses intelectuales están relacionados con la formación de los movimientos de resistencia política, las articulaciones discursivas, subjetivas y productivas de las clases sociales, la economía capitalista financiarizada y las lecturas literarias.</p>
                </div>
            </section>
            <section class="us__author">
                <div class="us__author__img">
                    <img src="../assets/img/aumaria.jpeg" alt="autor1" />
                </div>
                <div class="us__author__content">
                    <h2 class="us__author__name">María Arconada</h2>
                    <p class="us__author__text">Marxista en constante formación, graduada en Psicología por la Universidad Autónoma de Madrid y opositando actualmente a la Formación Sanitaria Especializada PIR.</p>
                    <p class="us__author__text">Interesada en el análisis de la conducta desde la filosofía conductista, el uso y abuso de sustancias, la psicología social y la psicología política.</p>
                </div>
            </section>
            <div class="footer__us__line"></div>


			<!-- PIE DE PÁGINA -->
			<footer class="footer" id="footer">

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