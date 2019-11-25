<?php
	if($_POST)
	{
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$conn = mysqli_connect("localhost","root","","dawii");
		$sql="SELECT * FROM usuarios WHERE nombre = '$user' AND pass = '$pass'";
		$result=mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				session_start();
				$_SESSION['id_user']=$row['idusuarios'];
				//echo $_SESSION['id_user'];die;
				$_SESSION['logged']=true;
				header("location:index1.php");
			}
		}else{
			header("location:login.php");
			echo"ERRORsssssssssssssssssssssssssssssssssssssssssssssssssss";die;
		}
	}
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
		</style>
	</head>
	<body style="background-color:;">
		<ul>
			
		</ul>
		<div class="col-md-6 col-md-offset-3"style="display:block;margin-top:16%;background-color:;">
			<div class="col-md-10 col-md-offset-1" style="display:block;heigth:500px;background-color:;">
				<div src="images/log2.png" style="background-image: url(images/log2.png);background-size: 70%;background-repeat: no-repeat;background-position: 29px 17px;background-color: white;margin: 0 auto;display: block;height: 200px;width: 200px;border: 1px solid #CDCDCD;border-radius: 50%;margin-top: -130px;">
				</div>
				<div class="col-sm-10 col-sm-offset-1">
					<h3 style="margin-top:-10px;">Iniciar Sesión</h3>
					<form method="POST" action="">
						<label>Usuario</label><br />
						<input type="text" placeholder="ti@ti.15Rg32" name="user" style="background-image: url(images/login.png);padding-left: 32px;background-position: 2px 8px;background-size: 23px;background-repeat: no-repeat;height: 40px;width:100%;margin-top:10px;border:1px solid #CDCDCD;border-radius:3px;"/><br />
						<label style="margin-top:10px;">Pass</label><br />
						<input type="password" placeholder="1Qws21s" name="pass" style="background-image: url(images/key.png);padding-left: 32px;background-position: 2px 8px;background-size: 23px;background-repeat: no-repeat;height: 40px;width:100%;margin-top:10px;border:1px solid #CDCDCD;border-radius:3px;"/><br />
						<input type="submit" value="entrar" style="margin:10px 0px;background-color:#4089ff;border:0px solid;border-radius:3px;color:white;padding:5px;"/><br />
						<input type="checkbox" name="manter" checked><label style="margin-left:5px;">Manter Abierta</label>
						<a href="" style="float:right;">Ha olvidado su contraseña?</a>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>