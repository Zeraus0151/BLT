<?php
	session_start();
	if($_SESSION['logged'])
	{
		$_SESSION['logged'];
	}else{
		//header("location:login.php");
		echo"FAVOR LOGAR";
	}
?><?php
	include'imagenDao.php';
	$selecciona=new imagenDao;
	$id=$_GET['id'];
	//var_dump($id);
	$selecciona->eliminar($id);
?>