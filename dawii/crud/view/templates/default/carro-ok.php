<?php
	session_start();
	if(isset($_SESSION['logged']))	{
		$_SESSION['logged'];
	}else{
	}
	$id=$_GET['id'];
	if(isset($_SESSION['count_cookie']))
	{
		$count=$_SESSION['count_cookie'];
	}else{
		$count=0;
	}
	
	$conn = mysqli_connect("localhost","root","","dawii");
	$sql = "SELECT * FROM juegos AS j INNER JOIN imagenes as i ON i.juegos_idjuegos = j.idjuegos WHERE idjuegos = juegos_idjuegos AND j.idjuegos = '$id'";
	
	$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if(isset($_SESSION['count_cookie']))
			{
				$count++;
				$cookie_name="carro".$count;echo $cookie_name;
			}else{
				$cookie_name="carro";$count++;
			}
			$id_cookie=$id;
			$nombre_cookie=$row['nombree'];
			$descripcion_cookie=$row['descripcion'];
			$autor_cookie=$row['autor'];
			$distribuidora_cookie=$row['distribuidora'];
			$lanzamiento_cookie=$row['lanzamiento'];
			$capa_cookie=$row['capa'];
			$precio_cookie=$row['precio'];
			/*
			echo $id_cookie."<br />";
			echo $nombre_cookie."<br />";
			echo $descripcion_cookie."<br />";
			echo $autor_cookie."<br />";
			echo $distribuidora_cookie."<br />";
			echo $lanzamiento_cookie."<br />";
			echo $capa_cookie."<br />";
			echo $precio_cookie."<br />";
			die;*/
			setcookie($cookie_name,$id_cookie."//".$nombre_cookie."//".$descripcion_cookie."//".$autor_cookie."//".$distribuidora_cookie."//".$lanzamiento_cookie."//".$capa_cookie."//".$precio_cookie, time() + (86400 * 30), "/"); // 86400 = 1 day
			//if(!isset($_COOKIE["carro1"])) {
			if(!isset($_COOKIE['carro'.$count])) {
				echo "Cookie '" . $cookie_name . "' no funfina!";
			} else {
				$pieces = explode("//", $_COOKIE[$cookie_name]);
				$idd = $pieces[0];
				$precio=$pieces[7];
				$capa=$pieces[6];
				//var_dump($precio);
				//var_dump($capa);die;
				//$nombre = $pieces[1];
				//echo $nombre.' .... ';
				//echo $idd;
				//echo "<br/>Value is: " . $_COOKIE[$cookie_name];
			}
			/*echo"
			<div id='carro-bottom'>
						<div class='col-lg-1'>
							<img src=".$row["capa"]." height='100'>
						</div>
						<div class='col-lg-5'>
							<p>".$row["nombree"]."</p>
						</div>
						<div class='col-lg-2'>
							<p id='valor'>".$row["precio"]."</p>
						</div>
						<div class='col-lg-2'>
							<form method='POST'>
								<input type='number' id='cantidad' name='quantity' min='1' max='5'>
							</form>
						</div>
						<div class='col-lg-1'>
							<p id='precio'></p>
						</div>
						<div class='col-lg-1'>
							<a href=''><p>X</p></a>
						</div>
					</div>";*/
		}
	}
	$_SESSION['count_cookie']=$count;
	header("location:carrito.php");
?>
<script type="text/javascript">
	function searchURL(){
		var $a=document.getElementById('valor').value
		var $b=document.getElementById('cantidad').value
		document.getElementById("precio").innerHTML = $a+$b;
	}
</script>