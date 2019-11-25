<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->asset?>css/index.css">
		<meta charset="UTF-8">
		<!-- JSSOR -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="<?php echo $this->asset?>css/jssor.css">
		<!-- END JSSOR-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- SCRIPT JSSOR-->
			<script src="<?php echo $this->asset?>js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
			<script src="<?php echo $this->asset?>js/jssor.js"></script>
		<!-- END SCRIPT JSSOR -->
		<section>
			<nav>
				<ul>
					<li><a href="<?php echo $this->url?>Home"><img src="<?php echo $this->asset?>img/logo.jpg" width="35px"></a></li>
					<li><a href="<?php echo $this->url?>Tienda">TIENDA</a></li>
					<li><a href="<?php echo $this->url?>Contacto">CONTACTO</a></li>
					<li>
						<form style="position:relative;">
							<input type="search" placeholder="Buscar..." style="border:1px solid white;border-radius:2px;"/>
								<button type="submit" style="position:absolute;top:4px; right:0;z-index:10;border:none;background:transparent;outline:none;">
									<i class="fa fa-search"></i>
								</button>
						</form>
					</li>
					<li style="padding:0px 20px;"><a href="<?php echo $this->url?>Carrito"><img id="img-nav" src="<?php echo $this->asset?>img/carro.png"></a></li>
					<li><a href="<?php echo $this->url?>Login"style="display:block;float:right;position:absolute;height:30px;right:10px;">LOGIN</a></li>
				</ul>
			</nav>