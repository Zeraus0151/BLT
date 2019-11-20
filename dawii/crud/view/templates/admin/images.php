<?php/*
	session_start();
	if($_SESSION['logged'])
	{
		$_SESSION['logged'];
	}else{
		header("location:login.php");
		echo"FAVOR LOGAR";
	}*/
?><?php 
	if($data){
		$list_imgs = $data['listImgs'];
		//echo var_dump($list_news);die;
		}else{
			$list_imgs = null;
		}
?>
		<div style="margin-left:20px;">
			<p style="font-size:30px;margin:30px;">Imágenes</p>
			<a href="<?php echo $this->url?>AdminImgs/addImgs" class="edit-button" style="">Agregar</a>
			<div style="background-color:#333;height:50px;border-radius:10px 10px 0px 0px;">
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Fecha Creación</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Descripción</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Nombre</div>
			</div>
			<?php $count = 0;?>
            <?php if($list_imgs):?>   
            <?php foreach($list_imgs as $imgs): ?> 
            <?php //$count++; $ccs_class=($count%2==0)?'even':'odd';?>
			<div style="background-color:white;height:50px;border-radius:10px 10px 0px 0px;">
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;"><?php echo $imgs->getCreacion();?></div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;"><?php echo $imgs->getDescripcion();?></div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;"><?php echo substr($imgs->getNombre(),0,25)?></div>
				<div class='col-sm-3' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'><a href="<?php echo $this->url?>AdminImgs/deleteImgs/<?php echo $imgs->getIdImgs();?>">X</a><a href="<?php echo $this->url?>AdminImgs/editImagenes/<?php echo $imgs->getIdImgs();?>">Editar</a></div>
			</div>
			<?php endforeach;?>
			<?php endif;?>
		</div>
	</body>
</html>