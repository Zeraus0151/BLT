<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Forms</title>
		<link href="<?php echo $this->asset?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link href="<?php echo $this->asset?>css/theme.css" rel="stylesheet" media="all">
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
			<li><a class="active" href="<?php echo $this->url?>Admin">Home</a></li>
			<li><a href="<?php echo $this->url?>AdminNews">News</a></li>
			<li><a href="<?php echo $this->url?>AdminUsers">Usuarios</a></li>
			<li><a href="<?php echo $this->url?>AdminImgs">Imágenes</a></li>
			<li style="float:right;"><a href="salir.php">Salir</a></li>
			<li style="float:right;"><a href="perfil.php">Perfil</a></li>
		</ul>
 