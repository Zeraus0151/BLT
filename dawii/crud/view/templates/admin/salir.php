<?php
	session_start();
	if($_SESSION['logged'])
	{	
		header("location:login.php");
		session_destroy();
		echo"Log Out Succed!!";
	}else{
		header("location:login.php");
		echo"FAVOR LOGAR";
	}
?>