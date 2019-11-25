<?php
$message = $data['msg'];
$list_news = $data['news'];
?>
<!DOCTYPE html>
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
                            <input type="text" name="fecha" placeholder="" value="<?php echo $list_news->getIngreso();?>" class="form-control">
                        </div>
                        <div class="">
							<p style="margin:10px;">Titulo</p>
                            <input type="text" name="titulo" placeholder="" value="<?php echo $list_news->getTitulo();?>" class="form-control">
                        </div>
                        <div class="">
							<p style="margin:10px;">Descripción</p>
                            <input type="text" name="descripcion" placeholder="" value="<?php echo $list_news->getDescripcion();?>" class="form-control">
                        </div>
						<div class="">
                            <input type="submit" value="Enviar" style="background-color:rgba(64,137,255,1);color:white;padding:5px;margin-top:5px;border:1px;border-radius:2px;">
                        </div>
						<div class="">
                            <input type="submit" name="exit" value="Salir" style="background-color:rgba(64,137,255,1);color:white;padding:5px;margin-top:5px;border:1px;border-radius:2px;">
                        </div>
						<input type="hidden" value="<?php echo $list_news->getIdNews(); ?>" name="id">
						
						<?php if ($message): ?>
                                <div class="form-group">
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <?php echo $message; ?>
                                    </div>
                                </div>
                        <?php endif; ?>
						</form>
                    </div>
                </div>
			</div>
		</div>

	</body>
</html>