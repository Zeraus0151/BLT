<?php
	session_start();
	if(isset($_SESSION['logged']))
	{
		$_SESSION['logged'];
	}else{
	}
?><html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<meta charset="UTF-8">
		<!-- JSSOR -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="css/jssor.css">
		<!-- END JSSOR-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- SCRIPT JSSOR-->
			<script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
			<script src="js/jssor.js"></script>
		<!-- END SCRIPT JSSOR -->
		<section>
			<nav>
				<ul>
					<li><a href="index.php"><img src="img/logo.jpg" width="35px"></a></li>
					<li><a href="tienda.php">TIENDA</a></li>
					<li><a href="contato.php">CONTACTO</a></li>
					<li>
						<form style="position:relative;">
							<input type="search" placeholder="Buscar..." style="border:1px solid white;border-radius:2px;"/>
								<button type="submit" style="position:absolute;top:4px; right:0;z-index:10;border:none;background:transparent;outline:none;">
									<i class="fa fa-search"></i>
								</button>
						</form>
					</li>
					<li style="padding:0px 20px;"><a href="carrito.php"><img id="img-nav" src="img/carro.png"></a></li>
					<li><a href="login.php"style="display:block;float:right;position:absolute;height:30px;right:10px;">LOGIN</a></li>
				</ul>
			</nav>
		<section>
			<article>
				<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1920px;height:1080px;overflow:hidden;visibility:hidden;">
					<!-- Loading Screen -->
					<div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
						<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
					</div>
					<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1920px;height:1080px;overflow:hidden;">
						<?php
							include'imagenIndexDao.php';
							$selecciona=new imagenIndexDao;
							$selecciona->jssor();
						?>
					</div>
					<!-- Bullet Navigator -->
					<div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
						<div data-u="prototype" class="i" style="width:16px;height:16px;">
							<svg viewbox="0 0 16000 16000" style="position:absolute;top:50px;left:0;width:100%;height:100%;">
								<circle class="b" cx="8000" cy="8000" r="5800"></circle>
							</svg>
						</div>
					</div>
					<!-- Arrow Navigator -->
					<div data-u="arrowleft" class="jssora074" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
						<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
							<path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
						</svg>
					</div>
					<div data-u="arrowright" class="jssora074" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
						<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
							<path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
						</svg>
					</div>
				</div>
			</article>
			<article>
				<div style="text-align:center;">
					<h3 style="font-size:40px;padding-top:20px;">Descubre nuestros Juegos</h3>
					<p style="font-size:20px;margin-bottom:50px;">Nuevos Demos pc gratis cada semana</p>
				</div>
				<div>
					<div id="div-half-left">
						<img src="img/wallpaper/capa_doom.jpg" width="100%">
					</div>
					<div id="div-half-right">
						<p id="p-div-half">Doom - May 13 - 2016</p>
						<h1 style="padding: 20px 0px 20px 30px;">Nuevo juego creado por  Bethesda de la antigua y clasica franquia</h1>
						<p class="p2-div-half">Es el más reciente juego de la franquicia Doom,
						el cuarto título de la serie principal y la primera gran entrega
						desde Doom 3 en 2004. Se lanzó en todo el mundo en Microsoft Windows,
						PlayStation 4 y Xbox One el 13 de mayo de 20161​ y funciona con la tecnología 
						de id Tech 6. La versión para Nintendo Switch, desarrollado conjuntamente con 
						Panic Button, fue lanzada el 10 de noviembre de 2017.​</p>
						<a href="view-game.php?id=7">LOREN IPSUM</a>
					</div>
				</div>
			</article>
		</section>
		<section>
			<div style="text-align:center;">
				<h3 style="font-size:40px;padding-top:20px;">Demo Juego</h3>
				<p style="font-size:20px;margin-bottom:50px;">Juega una pequeña demo y luego compras el juego</p>
			</div>
			<div id="div-game" style="margin-bottom:50px;">
				<canvas id="canvas" width="1280" height="720" style="display:block;margin:0 auto;"></canvas>
				<img src="img/1.jpg" id="scream" width="500" height="350" style="display:none;">
				<audio id="a" src="sounds/sounds2.mp3"></audio>
			</div>
		</section>
		<section id="news-section">
			<article>
				<div style="text-align:center;">
					<h3 style="display:block;font-size:40px;margin-top:100px;">Noticias</h3>
					<p style="font-size:20px;margin-bottom:50px;">Ultimas Noticias</p>
				</div>
				<?php
					include'noticiaIndexDao.php';
					$selecciona=new noticiaIndexDao;
					$selecciona->noticia();
				?>
			</article>
		</section>
		<section id="section-footer">
			<footer>
				<div class="col-lg-3 col-sm-6 footer">
					<div class="title-footer">
						<h3>Menú</h3>
					</div>
					<div class="content-footer">
						<div class="list-style-footer">
							<ul>
								<li>> Home</li>
								<li>> Tienda</li>
								<li>> Carro</li>
								<li>> Login</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 footer">
					<div class="title-footer">
						<h3>Contato</h3>
					</div>
					<div class="content-footer">
						<div class="div-contato-footer">
							<img src="img/icon-endereco.png" width="12px" style="float:left;">
							<p class="p-contato-footer">Direccion:</p>
							<p>Nose que poner ak, nº 1233</p>
						</div>
						<div class="div-contato-footer">
							<img src="img/icon-phone.png" width="12px" style="float:left;">
							<p class="p-contato-footer">Teléfono:</p>
							<p>(123)4567 8976</p>
						</div>
						<div class="div-contato-footer">
							<img src="img/icon-email.png" width="12px" style="float:left;">
							<p class="p-contato-footer">Email:</p>
							<p>
								<a href="">Email</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 footer">
					<div class="title-footer">
						<h3>La empresa</h3>
					</div>
					<div class="content-footer">
						<p>Un breve texto relatando aluna consa que se entiendo como importante o a relatar sobre la empresa o la página de la empresa				ou a página da Santa Casa Livramento.</p>
						<p> Este texto puede tener continuacion del texto anterior o simplismente puede ser feredio a un aspecto de la pagina</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 footer">
					<div class="title-footer">
						<h3>Redes Socias</h3>
					</div>
					<div class="content-footer">
						<p>Accese a nuestras redes sociales y este por dentro de todo lo que suecede dentro de nuestra empresa</p>
						<div>
							<img src="img/facebook-icon.png" width="50px">
							<img src="img/twitter-icon.png" width="50px">
							<img src="img/instagram-icon.png" width="50px">
						</div>
					</div>
				</div>
			</footer>
		</section>
		<!-- SCRIPT JSSOR -->
			<script type="text/javascript">jssor_1_slider_init();</script>
		<!-- END SCRIPT JSSOR-->
		<script  type="text/javascript" src="js/fundo.js"></script>
		<script  type="text/javascript" src="js/personaje.js"></script>
		<script type="text/javascript" src="js/enemigo.js"></script>
		<script type="text/javascript" src="js/smile.js"></script>
		<script  type="text/javascript" src="js/base.js"></script>
	</body>
</html>