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
	$idNoticia=$_REQUEST['id'];
	if($_POST)
	{
		$fecha_creacion=$_POST['fecha'];
		$titulo=$_POST['titulo'];
		$descripcion=$_POST['descripcion'];		
		$conn = mysqli_connect("localhost","root","","dawii");
		$sql = "UPDATE noticias SET fecha_creacion = '$fecha_creacion',titulo = '$titulo',descripcion = '$descripcion' WHERE idnoticias = $idNoticia";
		mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
	}
	$conn = mysqli_connect("localhost","root","","dawii");
	$sql = "SELECT * FROM noticias WHERE idnoticias = '$idNoticia'";
	$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
	if ($result->num_rows > 0) {
		//
		while($row = $result->fetch_assoc()) {
			$id = $row["idnoticias"];
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
	<body class="animsition">
		<ul>
			<li><a class="active" href="index1.php">Home</a></li>
			<li><a href="news.php">News</a></li>
			<li><a href="users.php">Usuarios</a></li>
			<li><a href="images.php">Imágenes</a></li>
			<li style="float:right;"><a href="salir.php">Salir</a></li>
			<li style="float:right;"><a href="perfil.php">Perfil</a></li>
		</ul>
        <div class="">
			<div class="col-sm-6 col-sm-offset-3" style="height:500px;display:block;margin:auto;">
				<div class="" style="padding:20px;border:1px solid lightgrey;border-radius:2px;background-color:white;">
                    <div class="" style="border-bottom:1px solid lightgrey;">
                        <strong>Editar Noticias</strong>
                    </div>
                    <div class="">
						<form method="POST">
                        <div class="">
							<p style="margin:10px;">Fecha Creación</p>
                            <input type="text" name="fecha" placeholder="" value="<?php echo $row['fecha_creacion'];?>" class="form-control">
                        </div>
                        <div class="">
							<p style="margin:10px;">Titulo</p>
                            <input type="text" name="titulo" placeholder="" value="<?php echo $row['titulo'];?>" class="form-control">
                        </div>
                        <div class="">
							<p style="margin:10px;">Descripción</p>
                            <input type="text" name="descripcion" placeholder="" value="<?php echo $row['descripcion'];?>" class="form-control">
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
			echo"<a href='news.php'>Volver</a>"
		?>
	</body>
</html>
<?php
}
	}
?>