<?php/*
	session_start();
	if(isset($_SESSION['logged']))	{
		$_SESSION['logged'];
	}else{
	}*/
?>
<?php 
	if($data){
		$list_imgs = $data['listJssor'];
		$list_juegos = $data['listJuego'];
		//echo var_dump($list_news);die;
	}else{
		$list_imgs = null;
		$list_juegos = null;echo "fodeo";die;
	}
?>
			<article>
				<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1920px;height:1080px;overflow:hidden;visibility:hidden;">
					<!-- Loading Screen -->
					<div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
						<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
					</div>
					<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1920px;height:1080px;overflow:hidden;">
						<?php $count = 0;?>
						<?php if($list_imgs):?>   
						<?php foreach($list_imgs as $imgs): ?> 
							<div>
								<img data-u='image' src='<?php echo $this->asset?><?php echo $imgs->getNombre();?>'/>
							</div>
						<?php endforeach;?>
						<?php endif;?>
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
			
				<!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
			
			<div class="container">
				<section class="">
					<h3 id="">Tienda</h3>
					<!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
					<?php $count = 0;?>
					<?php if($list_juegos):?>   
					<?php foreach($list_juegos as $juego): ?> 
					<div class='col-lg-4 col-sm-6 nnn'>
						<div>
							<div>
								<a href="<?php echo $this->url?>Tienda/viewGame/<?php echo $juego->getIdJuego();?>"><img src="<?php echo $this->asset?><?php echo $juego->getCapa();?>" width='100%'/></a>
							</div>
							<div>
							
								<div>
									<a href="<?php echo $this->url?>Tienda/viewGame/<?php echo $juego->getIdJuego();?>"><h3 style="font-size:20px;font-weight:bold;font-family:'Roboto', sans-serif;"><?php echo $juego->getNombre();?></h3></a>
									<p style="color:#9a9a9a;font-family:Roboto, sans-serif;"><?php echo substr($juego->getDescripcion(),0,100);?></p>
									<p style="color:#9a9a9a;font-family:Roboto, sans-serif;"><?php echo $juego->getDistribuidora();?><?php echo' - ';?><?php echo $juego->getLanzamiento();?></p>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach;?>
					<?php endif;?>
					<!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->					
				</section>
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
			<!-- SCRIPT JSSOR -->
			<script type="text/javascript">jssor_1_slider_init();</script>
			<!-- END SCRIPT JSSOR-->
	</body>
</html>