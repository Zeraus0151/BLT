<?php 
	if($data){
		$list_users = $data['listUsers'];
		//echo var_dump($list_users);die;
	}else{
		$list_users = null;
	}
?>
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
	</body>
</html>