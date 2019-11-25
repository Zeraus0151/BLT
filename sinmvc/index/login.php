<?php
	session_start();
	if(isset($_SESSION['logged']))
	{
		$_SESSION['logged'];
	}else{
	}
?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- SVG -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
			<!-- END SVG -->
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<style>
			body {font-family: Arial, Helvetica, sans-serif;background-image:url('img/001.jpg');background-repeat:no-repeat;background-size:124%;}
			* {box-sizing: border-box;}

			.a{
			  width: 100%;
			  padding: 12px;
			  border: none;
			  border-bottom: 2px solid rgba(117, 117, 117);
			  box-sizing: border-box;
			  margin-bottom: 16px;
			  resize: vertical;
			  background-color:rgba(1, 1, 1, 0.0000001);
			}

			input[type=submit] {
			  background-color: #4CAF50;
			  color: white;
			  padding: 12px 20px;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			}

			input[type=submit]:hover {
			  background-color: #45a049;
			}

			.ouvidoria {
			  padding: 20px;
			  background-color:white;
			  border:1px solid white;
			  border-radius:5px;
			  margin-top:50px;
			}
		</style>
	</head>
	<body>
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
		<div style="background-color:white;width:100%;">
			<div class="col-md-4 ouvidoria" style="height:491px;">
				<h3 style="margin:0 auto;text-align:center;padding-bottom:30px;">Entrar Cuenta</h3>
				<form method="POST" action="login-ok.php">
					<label for="email">E-mail</label>
					<input type="email" name="text" class="a" placeholder="Digite su E-mail.." required>
					
					<label for="tel">Contraseña</label>
					<input type="password" name="pass" class="a" placeholder="Digite su Contraseña..">

					<input type="submit" value="Entrar">
				</form>
			</div>
			<div class="col-md-4 ouvidoria">
				<h3 style="margin:0 auto;text-align:center;padding-bottom:30px;">Problemas con su Suscripción?</h3>
				<p>Realize preguntas para que nuestro equipo pueda ayudarle procurando el mejor método posible</p>
				<form action="/action_page.php">
					<label for="email">*E-mail</label>
					<input type="email" id="email" class="a" placeholder="Digite su E-mail.." required>
					
					<label for="tel">Mensaje</label>
					<textarea class="a" rows="7">Digite su problema o duda...</textarea>

					<input type="submit" value="Entrar">
				</form>
			</div>
			<div class="col-md-4 ouvidoria" style="float:right;">
				<h3 style="margin:0 auto;text-align:center;padding-bottom:31px;">Registrarse</h3>
				<form action="/action_page.php">
					<label for="email">E-mail</label>
					<input type="email" id="email" class="a" placeholder="Digite su E-mail.." required>
					
					<label for="email">Nombre</label>
					<input type="text" id="name" class="a" placeholder="Digite su Nombre.." required>
					
					<label for="tel">Contraseña</label>
					<input type="password" id="pass" class="a" placeholder="Digite su Contraseña..">
					
					<label for="tel">Verificar Contraseña</label>
					<input type="password" id="pass2" class="a" placeholder="Digite su Contraseña..">

					<input type="submit" value="Inscribirse">
				</form>
			</div>
		</div>
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
	</body>
</html>