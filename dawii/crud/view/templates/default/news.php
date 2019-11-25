<?php


$message = $data['msg'];
$list_news = $data['news'];
?>
		<form method="POST">
			<input type="hidden" value="<?php echo $list_news->getIdNews();?>" name="id">
			
		</form>
		<section>
			<div>
				<div id="news-title">
				
					<h3><?php echo $list_news->getTitulo();?></h3>
					<p><?php echo substr($list_news->getDescripcion(), 0, 80);?></p>
				</div>
				
				<img src="<?php echo $this->asset?>img/news/1.jpg" width="100%">
				<img src="<?php echo $this->asset?>img/news/11.jpg" width="70%" style="margin-left:15%;margin-top:-100px;">
				
			</div>
			<div id="content-news">
				<p><?php echo $list_news->getDescripcion();?></p>
			</div>
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
							<p class="p2-contato-footer">Nose que poner ak, nº 1233</p>
						</div>
						<div class="div-contato-footer">
							<img src="img/icon-phone.png" width="12px" style="float:left;">
							<p class="p-contato-footer">Teléfono:</p>
							<p class="p2-contato-footer">(123)4567 8976</p>
						</div>
						<div class="div-contato-footer">
							<img src="img/icon-email.png" width="12px" style="float:left;">
							<p class="p-contato-footer">Email:</p>
							<p class="p2-contato-footer">
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