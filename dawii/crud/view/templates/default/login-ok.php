<?php
	$nombre=$_POST['text'];
	$pass=$_POST['pass'];
	$conn = mysqli_connect("localhost","root","","dawii");
		$sql="SELECT * FROM usuarios WHERE nombre = '$nombre' AND pass = '$pass'";
		$result=mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				session_start();
				$_SESSION['id_user']=$row['idusuarios'];
				//$_SESSION['carro']=$row['idprod'];
				$_SESSION['logged']=true;
				header("location:index.php");
			}
		}else{
			header("location:login.php");
			echo"ERRORsssssssssssssssssssssssssssssssssssssssssssssssssss";die;
		}
?>