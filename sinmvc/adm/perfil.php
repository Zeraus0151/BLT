<?php
	include'usuarioDao.php';
	session_start();
	if($_SESSION['logged'])
	{
		$_SESSION['logged'];
	}else{
		header("location:login.php");
		echo"FAVOR LOGAR";
	}
	$sesion = $_SESSION['id_user'];
	//var_dump($sesion);die;
	if($_POST){
		$nombre=$_POST['nombre'];
		$pass=$_POST['pass'];		
		$pass2=$_POST['pass2'];	
		if($pass && $pass2 && $pass==$pass2)
		{
			$selecciona=new usuarioDao;
			$selecciona->inserirAdm($nombre,$pass,$sesion);
		}else{
			echo"Contraseñas diferentes";
		}
	}
	$conn = mysqli_connect("localhost","root","","dawii");
	$sql="SELECT * FROM usuarios WHERE idusuarios = '$sesion'";
	$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
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
			#nombre{
				margin-top:10px;
				text-align:center;
				font-size:25px;
			}
			#profesion{
				text-align:center;
				font-size:18px;
				color:#0070FF;
			}
			#right{
				margin-left:20px;
				text-align:justify;
			}
			span{
				font-weight:bold;
			}
			form input{
				border:0px;
				border-bottom:1px solid grey;
				padding:5px;
				max-width:200px;
			}
			#aa{
				margin-top:10px;
				background-color:white;
				border:2px solid grey;
				border-radius:16px;
			}
			#eliminar{
				color:white;
				background-color:#4089ff;
				padding:7px;
				border:3px solid;
				border-radius:16px;
			}
			#eliminar:hover{
				color:#4089ff;
				background-color:white;
				padding:7px;
				border:3px solid #4089ff;
				text-decoration:none;
			}
		</style>
	</head>
	<body style="background-image:url('images/wallpaper.jpg');background-size:100%;">
		<ul>
			<li><a class="active" href="index1.php">Home</a></li>
			<li><a href="news.php">News</a></li>
			<li><a href="users.php">Usuarios</a></li>
			<li><a href="images.php">Imágenes</a></li>
			<li style="float:right;"><a href="">Salir</a></li>
			<li style="float:right;"><a href="perfil.php">Perfil</a></li>
		</ul>
		<div style="margin-left:20%;width:60%;background-color:;height:500px;margin-top:100px;">
			<div style="background-color:white;width:50%;height:100%;margin-top:-20px;float:left;border:0px solid;border-radius:5px;margin-right:-30px;z-index:999;box-shadow:9px 6px 12px 0px #383838;">
				<div id="right">
					<h3>Sobre Mi</h3>
					<p style="color:grey;margin-right:20px;"><?php echo $row["sobremi"];?></p>
					<p style="width:50%;"><span>Email: </span> <?php echo $row["nombre"];?></p>
					<p style="display:block;width:50%;"><span>Estado Cuenta: </span><?php echo $row["estado"];?></p>
					<div style="width:30%;float:right;font-weight:bold;font-size:16px;padding:10px;display:block;margin-top:-60px;">
						<p>Eliminar</p>
						<a href="eliminarUsers.php?id=<?php echo $row["idusuarios"];?>" id="eliminar">Eliminar</a>
					</div>
					<h3 style="margin-top:-5px;margin-bottom:-5px;">Acciones</h3>
					<div style="width:50%;float:left;font-weight:bold;font-size:16px;padding:10px;">
						<p style="margin-bottom:-2px;">Editar</p>
						<form method="POST">
							<input type="text" name="nombre" placeholder="Nuevo nombre"/>
							<input type="password" name="pass" placeholder="Pass"/>
							<input type="password" name="pass2" placeholder="Pass x2"/>
							<input type="submit" value="Editar" id="aa"/>
						</form>
					</div>
				</div>
			</div>
			<div style="background-color:white;width:50%;height:100%;margin-left:-20px;float:left;border:0px solid;border-radius:5px;z-index:-1;position:relative;">
				<img src="images/view.jpg" width="100%" height="250px" style="border:0px solid;border-radius:5px 5px 0px 0px;">
				<img src="images/me-dijiste-meme-gato-09.jpg" style="border:0px solid;border-radius:50%;height:200px;width:200px;display:block;margin:auto;margin-top:-75px;box-shadow:3px 3px 6px 0px #383838;">
				<p id="nombre"><?php echo $row["nombre"];?></p>
				<p id="profesion">Manager</p>
			</div>
		</div>
		<?php
				}
			}
			die;
		?>
	</body>
</html>