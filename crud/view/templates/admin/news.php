<?php 
	if($data){
		$list_news = $data['listNews'];
		//echo var_dump($list_news);die;
		}else{
			$list_news = null;
		}
?>
		<div style="margin-left:20px;margin-right:20px;">
			<p style="font-size:30px;margin:30px;">Noticias</p>
			<a href="<?php echo $this->url?>AdminNews/addNews" class="edit-button" style="">Agregar</a>
			<div style="background-color:#333;height:50px;border-radius:10px 10px 0px 0px;">
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Fecha Creación</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Titulo</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Descripción</div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:white;padding-top:11px;font-size:20px;">Acciones</div>
			</div>
			<?php $count = 0;?>
            <?php if($list_news):?>   
            <?php foreach($list_news as $news): ?> 
            <?php //$count++; $ccs_class=($count%2==0)?'even':'odd';?>
			<div style="background-color:white;height:50px;border-radius:10px 10px 0px 0px;">
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;"><?php echo $news->getIngreso();?></div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;"><?php echo $news->getTitulo();?></div>
				<div class="col-sm-3" style="float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;"><?php echo substr($news->getDescripcion(),0,25)?></div>
				<div class='col-sm-3' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'><a href="<?php echo $this->url?>AdminNews/deleteNews/<?php echo $news->getIdNews();?>">X</a><a href="<?php echo $this->url?>AdminNews/editNoticias/<?php echo $news->getIdNews();?>">Editar</a></div>
			</div>
			<?php endforeach;?>
			<?php endif;?>
		</div>
	</body>
</html>