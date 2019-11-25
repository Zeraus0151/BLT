<?php
	session_start();
	if(isset($_SESSION['logged']))	{
		$_SESSION['logged'];
	}else{
	}
?><?php
	$idJuego=$_REQUEST['id'];
	$conn = mysqli_connect("localhost","root","","dawii");
	$sql = "SELECT * FROM juegos AS j INNER JOIN imagenes as i ON i.juegos_idjuegos = j.idjuegos WHERE idjuegos = juegos_idjuegos AND j.idjuegos = '$idJuego'";
	

	
	$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>
<html>
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
		<div>
			<img src="<?php echo $row["nombre"];?>" width="100%">
			<img src="<?php echo $row["capa"];?>" style="border: 2px solid rgba(0,0,0,0.0001);border-radius: 15px;margin-top:-250px;margin-left:75px;" width="500px">
			<div style="background-color:#2e3032;width:40%;color:white;right:0;margin-top:-550px;margin-right:120px;padding:20px;position:absolute;">
				<h1><?php echo $row["nombree"];?></h1>
				<p style="color:grey;"><?php echo $row["lanzamiento"];?></p>
				<p><?php echo $row["descripcion"];?></p>
				<div>
					<div style="float:left;">
						<img src="img/mature.png">
					</div>
					<div style="float:left;position:relative;bottom:10;padding-top:80px;padding-left:10px;">
						<p>Desarrollador:<?php echo $row["autor"];?></p>
						<p>Editor:<?php echo $row["distribuidora"];?></p>
						<a href="carro-ok.php?id=<?php echo $row["idjuegos"];?>"><img id="img-nav" src="img/carro.png"></a>
					</div>
				</div>
			</div>
			<?php
				}
			}else{
				echo"no existe ese juego";die;
			}
			?>
			<div>
				<div style="float:left;background-color:#F8F8F8;height:450px;width:100%;">
					<div style="width:16.6%;float:left;height:100%;">
					</div>
					<?php
						$conn = mysqli_connect("localhost","root","","dawii");
						$sql = "SELECT * FROM juegos";
						$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
					echo"
					<a href='view-game.php?id=".$row["idjuegos"]."'>
						<div style='width:14%;background-image:url(".$row["capa"].");float:left;margin-top:50px;height:350px;background-position:center;border-radius:20px;background-size:115%;'>
							</div>
					</a>
					<div style='width:3.7%;float:left;height:100%;'>
					</div>";
								}
					}else{
						echo"no existe esa noticia";die;
					}
					?>
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