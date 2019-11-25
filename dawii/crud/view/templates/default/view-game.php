<?php/*
	session_start();
	if(isset($_SESSION['logged']))	{
		$_SESSION['logged'];
	}else{
	}*/
?><?php

$message = $data['msg'];
$list_juegos = $data['juegos'];

?>
		<div>
			<img src="<?php echo $this->asset?><?php echo $list_juegos->getImg()?>" width="100%">
			<img src="<?php echo $this->asset?><?php echo $list_juegos->getCapa()?>" style="border: 2px solid rgba(0,0,0,0.0001);border-radius: 15px;margin-top:-250px;margin-left:75px;" width="500px">
			<div style="background-color:#2e3032;width:40%;color:white;right:0;margin-top:-550px;margin-right:120px;padding:20px;position:absolute;">
				<h1><?php echo $list_juegos->getNombre()?></h1>
				<p style="color:grey;"><?php echo $list_juegos->getLanzamiento()?></p>
				<p><?php echo $list_juegos->getDescripcion()?></p>
				<div>
					<div style="float:left;">
						<img src="<?php echo $this->asset?>img/mature.png">
					</div>
					<div style="float:left;position:relative;bottom:10;padding-top:80px;padding-left:10px;">
						<p>Desarrollador:<?php echo $list_juegos->getAutor()?></p>
						<p>Editor:<?php echo $list_juegos->getDistribuidora()?></p>
						<a href="carro-ok.php?id=<?php echo $list_juegos->getIdJuego()?>"><img id="img-nav" src="<?php echo $this->asset?>img/carro.png"></a>
					</div>
				</div>
			</div>

			<div>
				<div style="float:left;background-color:#F8F8F8;height:450px;width:100%;">
					<div style="width:16.6%;float:left;height:100%;">
					</div>

					<a href='<?php echo $this->url?>?id=<?php echo $list_juegos->getIdJuego()?>'>
						<div style='width:14%;background-image:url("<?php echo $list_juegos->getCapa()?>");float:left;margin-top:50px;height:350px;background-position:center;border-radius:20px;background-size:115%;'>
						</div>
					</a>
					<div style='width:3.7%;float:left;height:100%;'>
					</div>
					<a href="#">
						<div style="width:14%;background-image:url('img/doom.jpg');float:left;margin-top:50px;height:350px;background-position:center;border-radius:20px;background-size:115%;">
						</div>
					</a>
						
					<div style="width:3.7%;float:left;height:100%;">
					</div>
						
					<a href="#">
						<div style="width:14%;background-image:url('img/doom.jpg');float:left;margin-top:50px;height:350px;background-position:center;border-radius:20px;background-size:115%;">
						</div>
					</a>
						
					<div style="width:3.7%;float:left;height:100%;">
					</div>
						
									
					<a href="#">
						<div style="width:14%;background-image:url('img/doom.jpg');float:left;margin-top:50px;height:350px;background-position:center;border-radius:20px;background-size:115%;">
						</div>
					</a>
						
						
					<div style="width:16.6%;float:left;height:10px;">
					</div>
						
				</div>
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