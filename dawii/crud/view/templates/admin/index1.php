<?php/*
	session_start();
	if($_SESSION['logged'])
	{
		$_SESSION['logged'];
	}else{
		header("location:login.php");
		echo"FAVOR LOGAR";
	}*/
?>
<?php 
	if($data){
		$list_users = $data['listUsers'];
		//echo var_dump($list_users);die;
	}else{
		$list_users = null;
	}
?>
			<!--<div id="all-browser-ww-monthly-201902-201907" class="col-sm-3" height="400" style="width:600px; height: 400px;"></div><!-- You may change the values of width and height above to resize the chart <p>Source: <a href="https://gs.statcounter.com/browser-market-share#monthly-201902-201907">StatCounter Global Stats - Browser Market Share</a></p><script type="text/javascript" src="https://www.statcounter.com/js/fusioncharts.js"></script><script type="text/javascript" src="https://gs.statcounter.com/chart.php?all-browser-ww-monthly-201902-201907&chartWidth=600"></script>
			-->
		<div style="margin-left:20px;">
			<p style="font-size:30px;margin:30px;">Usuarios</p>
			<a href="<?php echo $this->url?>AdminUsers/addUsers" class="edit-button" style="">Agregar</a>
			<div style="background-color:#333;height:50px;border-radius:10px 10px 0px 0px;">
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Fecha Ingreso</div>
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Tipo Usuario</div>
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Nombre</div>
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">saldo</div>
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Estado Cuenta</div>
				<div class="col-sm-2" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Acciones</div>
			</div>
			<?php $count = 0;?>
            <?php if($list_users):?>   
            <?php foreach($list_users as $users): ?> 
            <?php //$count++; $ccs_class=($count%2==0)?'even':'odd';?>
			<div style='background-color:white;height:50px;'>
				<div class='col-sm-2' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'><?php echo $users->getIngreso();?></div>
				<div class='col-sm-2' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'><?php echo $users->getTipo();?></div>
				<div class='col-sm-2'style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'><?php echo $users->getNombre();?></div>
				<div class='col-sm-2' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'><?php echo $users->getSaldo();?></div>
				<div class='col-sm-2' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'><?php echo $users->getEstado();?></div>
				<div class='col-sm-2' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'><a href="<?php echo $this->url?>AdminUsers/deleteUsers/<?php echo $users->getIdUser();?>">X</a><a href="<?php echo $this->url?>AdminUsers/editUsuarios/<?php echo $users->getIdUser();?>">Editar</a></div>
			</div>
			<?php endforeach;?>
			<?php endif;?>
		</div>
		<div class="col-lg-10 col-lg-offset-1" style="background-color:rgba(64,137,255,1);margin-top:163px;color:white;border:1px solid;border-radius:10px 10px 10px 10px;float:left;margin-bottom:100px;">
			<h3 style="border-bottom:1px solid white;margin-bottom:10px;">Visitantes</h3>
			<div class="col-sm-6" style="margin-left:-20px;">
				<div class="col-sm-12" style="background-color:;height:30px;">
					<div class="col-sm-8" style="">Estados Unidos</div>
					<div class="col-sm-4">584</div>
				</div>
				<div class="col-sm-12" style="background-color:;height:30px;">
					<div class="col-sm-8" style="">Australia</div>
					<div class="col-sm-4">310</div>
				</div>
				<div class="col-sm-12" style="background-color:;height:30px;">
					<div class="col-sm-8" style="">Reino Unido</div>
					<div class="col-sm-4">254</div></div>
				<div class="col-sm-12" style="background-color:;height:30px;">
					<div class="col-sm-8" style="">Turquía</div>
					<div class="col-sm-4">193</div>
				</div>
				<div class="col-sm-12" style="background-color:;height:30px;">
					<div class="col-sm-8" style="">Uruguay</div>
					<div class="col-sm-4">073</div>
				</div>
				<div class="col-sm-12" style="background-color:;height:30px;margin-bottom:10px;">
					<div class="col-sm-8" style="">Brasil</div>
					<div class="col-sm-4">261</div>
				</div>
			</div>
			<div class="col-sm-6" style="background-color:white;margin-top:6px;border:1px solid;border-radius:5px;">
				<div class="col-sm-12" style="color:grey;background-color:;margin-left:-20px;">
					<p style="margin-top:10px;text-align:center;font-size:20px;margin-right:-20px;">Mes</p>
					<div class="col-sm-4" style="color:#333;margin-left:-10px;margin-right:-10px;">
						<p style="">Enero</p>
					</div>
					<div class="col-sm-8" style="color:blue;margin-top:;">
						<p style="background-color:blue;width:50px;">Hola</p>
					</div>
					<div class="col-sm-4" style="color:#333;margin-left:-10px;margin-right:-10px;">
						<p style="">Febrero</p>
					</div>
					<div class="col-sm-8" style="color:blue;">
						<p style="background-color:blue;width:120px;">Profe</p>
					</div>
					<div class="col-sm-4" style="color:#333;margin-left:-10px;margin-right:-10px;">
						<p style="">Marzo</p>
					</div>
					<div class="col-sm-8" style="color:blue;">
						<p style="background-color:blue;width:170px;">:P</p>
					</div>
					<div class="col-sm-4" style="color:#333;margin-left:-10px;margin-right:-10px;">
						<p style="">Abril</p>
					</div>
					<div class="col-sm-8" style="color:blue;">
						<p style="background-color:blue;width:82px;">:?</p>
					</div>
				</div>
			</div>
		</div>
		<img src="images/descarga.png" width="50%" style="display:block;margin-left:25%;margin-top:100px;">
	</body>
</html>