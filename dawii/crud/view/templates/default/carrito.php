<?php
	session_start();
	if(isset($_SESSION['logged']))
	{
		$_SESSION['logged'];
	}else{
	}
	if(isset($_SESSION['count_cookie']))
	{
		$countt=$_SESSION['count_cookie'];
		var_dump($_SESSION['count_cookie']);
	}else{
		echo"no fnca sesion";
		die;
	}
?><html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body style="background-color:E7E7E7;">
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
		</section>

		<section id="news-section">
			<article>
				<div class="col-lg-8 col-lg-offset-2" style="margin-top:50px;">
					<div id="carro-top">
						<div class="col-lg-6">Producto</div>
						<div  class="col-lg-2">Precio</div>
						<div  class="col-lg-2">Cantidad</div>
						<div  class="col-lg-2">Subtotal</div>
					</div>
					<div id="carro-bottom">
						<div class="col-lg-1">
							<img src="img/doom.jpg" height="100">
						</div>
						<div class="col-lg-5">
							<p>Doom(2016)</p>
						</div>
						<div class="col-lg-2">
							<p>$29.99</p>
						</div>
						<div class="col-lg-2">
							<form>
								<input type="number" name="quantity" min="1" max="5">
							</form>
						</div>
						<div class="col-lg-1">
							<p>$29.99</p>
						</div>
						<div class="col-lg-1">
							<a href=""><p>X</p></a>
						</div>
					</div>
					<?php
					for ($x = 1; $x <= $countt; $x++) {
						if($x==1)
						{
							if(!isset($_COOKIE['carro'])) {
								echo "Cookie carro'". $x . "' no funciona!";
							} else {
								$pieces = explode("//", $_COOKIE["carro"]);
								$id = $pieces[0];
								$nombre = $pieces[1];
								$descripcion = $pieces[2];
								$autor = $pieces[3];
								$distribuidora = $pieces[4];
								$lanzamiento = $pieces[5];
								$capa = $pieces[6];
								$precio = $pieces[7];
								/*var_dump("ID:".$id."<br />");
								var_dump("NOMBRE:".$nombre."<br />");
								var_dump("DESCRIPACION:".$descripcion."<br />");
								var_dump("AUTOR:".$autor."<br />");
								var_dump("DISTRIBUIDORA:".$distribuidora."<br />");
								var_dump("LANZAMIENTO:".$lanzamiento."<br />");
								var_dump("CAPA:".$capa."<br />");
								var_dump("PRECIO:".$precio."<br />");*/
								echo"
								<div id='carro-bottom'>
									<div class='col-lg-1'>
										<img src=".$capa." height='100'>
									</div>
									<div class='col-lg-5'>
										<p>".$nombre."</p>
									</div>
									<div class='col-lg-2'>
										<p id='valor'>".$precio."</p>
									</div>
									<div class='col-lg-2'>
										<form method='POST'>
											<input type='number' id='cantidad' name='quantity' min='1' max='5'>
										</form>
									</div>
									<div class='col-lg-1'>
										<p id='precio'></p>
									</div>
									<div class='col-lg-1'>
										<a href=''><p>X</p></a>
									</div>
								</div>";
							}
						}else{
							var_dump('carro'.$x);
							if(!isset($_COOKIE['carro'.$x])) {
								echo "Cookie carro'". $x . "' no funciona!";
							} else {
								$pieces = explode("//", $_COOKIE["carro".$x]);
								$id = $pieces[0];
								$nombre = $pieces[1];
								$descripcion = $pieces[2];
								$autor = $pieces[3];
								$distribuidora = $pieces[4];
								$lanzamiento = $pieces[5];
								$capa = $pieces[6];
								$precio = $pieces[7];
								/*var_dump("ID:".$id."<br />");
								var_dump("NOMBRE:".$nombre."<br />");
								var_dump("DESCRIPACION:".$descripcion."<br />");
								var_dump("AUTOR:".$autor."<br />");
								var_dump("DISTRIBUIDORA:".$distribuidora."<br />");
								var_dump("LANZAMIENTO:".$lanzamiento."<br />");
								var_dump("CAPA:".$capa."<br />");
								var_dump("PRECIO:".$precio."<br />");*/
								echo"
								<div id='carro-bottom'>
									<div class='col-lg-1'>
										<img src=".$capa." height='100'>
									</div>
									<div class='col-lg-5'>
										<p>".$nombre."</p>
									</div>
									<div class='col-lg-2'>
										<p id='valor'>".$precio."</p>
									</div>
									<div class='col-lg-2'>
										<form method='POST'>
											<input type='number' id='cantidad' name='quantity' min='1' max='5'>
										</form>
									</div>
									<div class='col-lg-1'>
										<p id='precio'></p>
									</div>
									<div class='col-lg-1'>
										<a href=''><p>X</p></a>
									</div>
								</div>";
							}
						}
					}
					?>
					<a href="" id="enviar-carro">COMPRAR</a>
				</div>
				
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
	</body>
</html>