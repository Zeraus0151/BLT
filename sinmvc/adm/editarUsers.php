<?php
	session_start();
	if($_SESSION['logged'])
	{
		$_SESSION['logged'];
	}else{
		header("location:login.php");
		echo"FAVOR LOGAR";
	}
?><?php
	$idUsuario=$_REQUEST['id'];
	if($_POST)
	{
		$fecha_ingreso=$_POST['fecha'];
		$tipo=$_POST['tipo'];
		$nombre=$_POST['nombre'];		
		$saldo=$_POST['saldo'];		
		$estado=$_POST['estado'];		
		$conn = mysqli_connect("localhost","root","","dawii");
		$sql = "UPDATE usuarios SET fecha_ingreso = '$fecha_ingreso',tipo = '$tipo',nombre = '$nombre',saldo = '$saldo', estado = '$estado' WHERE idusuarios = $idUsuario";
		mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
	}
	$conn = mysqli_connect("localhost","root","","dawii");
	$sql = "SELECT * FROM usuarios WHERE idusuarios = '$idUsuario'";
	$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
	if ($result->num_rows > 0) {
		//
		while($row = $result->fetch_assoc()) {
			$id = $row["idusuarios"];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Forms</title>
		<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
		<link href="css/theme.css" rel="stylesheet" media="all">
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
	<body class="animsition" style="background-color:#E9E9E9;">
		<ul>
			<li><a class="active" href="index1.php">Home</a></li>
			<li><a href="news.php">News</a></li>
			<li><a href="users.php">Usuarios</a></li>
			<li><a href="images.php">Imágenes</a></li>
			<li style="float:right;"><a href="salir.php">Salir</a></li>
			<li style="float:right;"><a href="perfil.php">Perfil</a></li>
		</ul>
        <br/><br/><br/><br/>
		<div class="">
			<div class="col-sm-6 col-sm-offset-3" style="height:500px;display:block;margin:auto;">
				<div class="" style="padding:20px;border:1px solid lightgrey;border-radius:2px;background-color:white;">
                    <div class="" style="border-bottom:1px solid lightgrey;">
                        <strong>Editar Usuários</strong>
                    </div>
                    <div class="">
						<form method="POST">
                        <div class="">
							<p style="margin:10px;">Fecha Ingreso</p>
                            <input type="text" name="fecha" placeholder="" value="<?php echo $row['fecha_ingreso'];?>" class="form-control">
                        </div>
                        <div class="">
							<p style="margin:10px;">Tipo</p>
                            <input type="text" name="tipo" placeholder="" value="<?php echo $row['tipo'];?>" class="form-control">
                        </div>
                        <div class="">
							<p style="margin:10px;">Nombre</p>
                            <input type="text" name="nombre" placeholder="" value="<?php echo $row['nombre'];?>" class="form-control">
                        </div>
						<div class="">
							<p style="margin:10px;">Saldo</p>
                            <input type="text" name="saldo" placeholder="" value="<?php echo $row['saldo'];?>" class="form-control">
                        </div>
						<div class="">
							<p style="margin:10px;">Estado</p>
                            <input type="text" name="estado" placeholder="" value="<?php echo $row['estado'];?>" class="form-control">
                        </div>
						<div>
                            <input type="submit" value="Enviar" style="background-color:rgba(64,137,255,1);color:white;padding:5px;margin-top:5px;border:1px;border-radius:2px;">
                        </div>
						</form>
						
                    </div>
                </div>
			</div>
		</div>
		<?php
			echo"<a href='users.php'>Volver</a>"
		?>
	</body>
</html>
<?php
}
	}
?>