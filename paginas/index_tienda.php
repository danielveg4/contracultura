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
			<div class="shop__principal">
                <div class="tienda__collection">
					<div class="shop__collection-container">
						<div class="collection-white">
							<div class="collection__text-white">
								<a class="collection__link-white" href="index_shop.php">Marx XXI</a>
							</div>
							<img class="collection__img" src="../assets/img/marx1.jpg">
						</div>
						<div class="shop__collection-details">
							<div class="shop__collection-description">En un momento histórico de tremendas y rapidísimas transformaciones, donde nuestra realidad social es cada vez más compleja, los cambios a los que esta se ve sometida más precipitados y profundos y los fenómenos a los que nuestras vidas se ven expuestas son más difíciles de comprender, ¿qué sentido tiene hoy seguir a vueltas con el marxismo? Un marxismo para el siglo XXI nace con la intención de responder a esta pregunta —y esperemos a otras tantas más— afrontando los grandes debates presentes en nuestra actualidad, con la pretensión principal de volver a situar el marxismo como la verdad alternativa de nuestro presente y futuro en un momento en el que la clase trabajadora de todo el planeta parece no contar ya con verdad alternativa alguna con la que enfrentar la totalitaria verdad capitalista.</div>
							<div class="shop__collection-price">7 euros / unidad</div>
							<div class="shop__collection-button">Resérvalo aquí</div>
						</div>
					</div>
					<div class="shop__collection-container">
						<div class="collection-white">
							<div class="collection__text-white">
								<a class="collection__link-white" href="index_shop.php">Cuadernos de Coyuntura</a>
							</div>
							<img class="collection__img" src="../assets/img/coyuntura.jpg">
						</div>
						<div class="shop__collection-details">
							<div class="shop__collection-description">Desde que el régimen del dinero se impusiera a sangre y fuego, el carácter cíclico de la producción capitalista y sus crisis han marcado, de forma abrupta, el devenir de la historia de la lucha de clases. Lo que aquí nos interesa es afirmar que las causas de las crisis económicas se encuentran definidas en la propia economía, que no es otra cosa que el movimiento social. Sociedad y economía constituyen, en este sentido, una unidad. Estudiar la sociedad es estudiar la economía, y viceversa. Por lo tanto, si las razones de las crisis son económicas, también son sociales, a pesar de que a primera vista tan solo parezcan técnicas. Esta es la principal diferencia entre el método de la economía burguesa y el marxismo: la capacidad del segundo de captar la interdependencia de todos los elementos de la economía, esto es, de entender la sociedad como totalidad.</div>
							<div class="shop__collection-price">8 euros / unidad</div>
							<div class="shop__collection-button">Resérvalo aquí</div>
						</div>
					</div>
					<div class="shop__collection-container">
						<div class="collection-white">
							<div class="collection__text-white">
								<a class="collection__link-white" href="index_shop.php">Ecología</a>
							</div>
							<img class="collection__img" src="../assets/img/ecologia.png">
						</div>
						<div class="shop__collection-details">
							<div class="shop__collection-description">Nos hallamos ante un aumento generalizado de los precios de los combustibles y, como consecuencia, de los alimentos. A julio de 2022 en el Estado español la inflación ya supera los dos dígitos. Todos los días lo sufrimos en nuestras carnes y nos lo recuerdan en los telediarios. En el centro global, el aumento de precios se traducirá en pérdidas de poder adquisitivo; se traducirá también en caras de pánico y aspavientos al oír cómo pronuncia el importe de la compra semanal el cajero del supermercado, al ver la última factura de la luz y al llenar el depósito de gasolina. Los proletarios tendremos que hacer aún más malabarismos para conseguir llegar a fin de mes, contando cada euro y cada céntimo, cada billete y cada moneda. Euros y céntimos que cuesta lo mismo ganar, pero que van perdiendo su valor ante nuestra impotencia. </div>
							<div class="shop__collection-price">8 euros / unidad</div>
							<div class="shop__collection-button">Resérvalo aquí</div>
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
					<p>Contracultura es un medio de divulgación y producción teórica con la intención de poder ser leído por amplias capas de la sociedad sin perder ni un ápice de rigor académico. Nuestro equipo gestor está conformado por estudiantes de posgrado del ámbito de la Ciencia Política y estudiantes egresados de grados universitarios como Ciencias Políticas, Economía y Psicología.</p>
				</div>
				<div class="footer__us">
					<a href="index_nosotrxs.php" class="footer__us-text">Consejo editorial</a>
					<a href="contacto.php" class="footer__us-text">Contacto</a>
					<a href="colabora.php" class="footer__us-text">Colabora</a>
					<a href="index_shop.php" class="footer__us-text">Tienda online</a>
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