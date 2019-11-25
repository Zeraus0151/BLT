<?php
	session_start();
	if($_SESSION['logged'])
	{
		$_SESSION['logged'];
	}else{
		header("location:login.php");
		echo"FAVOR LOGAR";
	}
?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style>
			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: rgba(64,137,255,1);
			}

			li {
				float: left;
			}

			li a {
				display: block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}

			li a:hover {
				background-color: rgba(255,255,255,0.05);
				text-decoration:none;
				color:white;
			}
			
			.edit-button:hover{
				background-color: rgba(64,137,255,1);
				text-decoration:none;
				color:white;
			}
			
			.edit-button{
				background-color:rgba(64,137,255,0.7);
				padding:10px;
				border 1px solid;
				border-radius:5px;
				margin-top:20px;
				display:block;
				width:70px;
				margin-bottom:20px;
				color:white;
			}
		</style>
	</head>
	<body style="background-color:;">
		<ul>
			<li><a class="active" href="index1.php">Home</a></li>
			<li><a href="news.php">News</a></li>
			<li><a href="users.php">Usuarios</a></li>
			<li><a href="images.php">Imágenes</a></li>
			<li style="float:right;"><a href="salir.php">Salir</a></li>
			<li style="float:right;"><a href="perfil.php">Perfil</a></li>
		</ul>
			<!--<div id="all-browser-ww-monthly-201902-201907" class="col-sm-3" height="400" style="width:600px; height: 400px;"></div><!-- You may change the values of width and height above to resize the chart <p>Source: <a href="https://gs.statcounter.com/browser-market-share#monthly-201902-201907">StatCounter Global Stats - Browser Market Share</a></p><script type="text/javascript" src="https://www.statcounter.com/js/fusioncharts.js"></script><script type="text/javascript" src="https://gs.statcounter.com/chart.php?all-browser-ww-monthly-201902-201907&chartWidth=600"></script>
			-->
		<div style="" class="col-lg-10 col-lg-offset-1">
			<p style="font-size:30px;margin:30px;">Noticias</p>
			<a href="agregarNews.php" class="edit-button" style="">Agregar</a>
			<div style="background-color:#333;height:50px;border-radius:10px 10px 0px 0px;">
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Fecha Creación</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Titulo</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Imagen</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Descripción</div>
			</div>
			<div style="background-color:white;height:50px;">
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">2018-09-29 05:57</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">Teeno vip 2018</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">8.jpg</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">Loren ipsum dolor(...)</div>
			</div>
			<div style="background-color:white;height:50px;">
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">2018-09-28 01:22</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">Guia teeno para Clanes</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">6.jpg</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">Loren ipsum dolor(...)</div>
			</div>
			<div style="background-color:white;height:50px;border-radius:0px 0px 10px 10px;">
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">2016-02-22 02:26</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">Comic con Nro. 4</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">5.jpg,7.jpg</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;">Loren ipsum dolor(...)</div>
			</div>
		</div>
		<div class="col-lg-10 col-lg-offset-1" style="background-color:rgba(64,137,255,1);margin-top:163px;color:white;border:1px solid;border-radius:10px 10px 10px 10px;float:left;margin-bottom:100px;">
			<h3 style="border-bottom:1px solid white;margin-bottom:10px;">Visitantes</h3>
			<div class="col-sm-6" style="margin-left:-20px;">
				<div class="col-sm-12" style="background-color:;height:30px;">
					<div class="col-sm-8" style="">Estados Unidos</div>
					<div class="col-sm-4">584</div>
				</div>
				<div class="col-sm-12" style="background-color:;height:30px;">
					<div class="col-sm-8" style="">Australia</div>
					<div class="col-sm-4">310</div>
				</div>
				<div class="col-sm-12" style="background-color:;height:30px;">
					<div class="col-sm-8" style="">Reino Unido</div>
					<div class="col-sm-4">254</div></div>
				<div class="col-sm-12" style="background-color:;height:30px;">
					<div class="col-sm-8" style="">Turquía</div>
					<div class="col-sm-4">193</div>
				</div>
				<div class="col-sm-12" style="background-color:;height:30px;">
					<div class="col-sm-8" style="">Uruguay</div>
					<div class="col-sm-4">073</div>
				</div>
				<div class="col-sm-12" style="background-color:;height:30px;margin-bottom:10px;">
					<div class="col-sm-8" style="">Brasil</div>
					<div class="col-sm-4">261</div>
				</div>
			</div>
			<div class="col-sm-6" style="background-color:white;margin-top:6px;border:1px solid;border-radius:5px;">
				<div class="col-sm-12" style="color:grey;background-color:;margin-left:-20px;">
					<p style="margin-top:10px;text-align:center;font-size:20px;margin-right:-20px;">Mes</p>
					<div class="col-sm-4" style="color:#333;margin-left:-10px;margin-right:-10px;">
						<p style="">Enero</p>
					</div>
					<div class="col-sm-8" style="color:blue;margin-top:;">
						<p style="background-color:blue;width:50px;">Hola</p>
					</div>
					<div class="col-sm-4" style="color:#333;margin-left:-10px;margin-right:-10px;">
						<p style="">Febrero</p>
					</div>
					<div class="col-sm-8" style="color:blue;">
						<p style="background-color:blue;width:120px;">Profe</p>
					</div>
					<div class="col-sm-4" style="color:#333;margin-left:-10px;margin-right:-10px;">
						<p style="">Marzo</p>
					</div>
					<div class="col-sm-8" style="color:blue;">
						<p style="background-color:blue;width:170px;">:P</p>
					</div>
					<div class="col-sm-4" style="color:#333;margin-left:-10px;margin-right:-10px;">
						<p style="">Abril</p>
					</div>
					<div class="col-sm-8" style="color:blue;">
						<p style="background-color:blue;width:82px;">:?</p>
					</div>
				</div>
			</div>
		</div>
		<img src="images/descarga.png" width="50%" style="display:block;margin-left:25%;margin-top:100px;">
	</body>
</html>