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
		<div style="margin-left:20px;">
			<p style="font-size:30px;margin:30px;">Usuários</p>
			<a href="agregarUsers.php" class="edit-button" style="">Agregar</a>
			<div style="background-color:#333;height:50px;border-radius:10px 10px 0px 0px;">
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Fecha Ingreso</div>
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Tipo Usuario</div>
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Nombre</div>
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">saldo</div>
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Estado Cuenta</div>
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Acción</div>
			</div>
			<?php
				include'usuarioDao.php';
				$selecciona=new usuarioDao;
				$selecciona->mostrar();
			?>
		</div>
	</body>
</html>