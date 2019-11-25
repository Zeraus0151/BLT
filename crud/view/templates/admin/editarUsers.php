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
$message = $data['msg'];
$list_users = $data['users'];
?>
		<br/><br/><br/><br/>
		<div class="">
			<div class="col-sm-6 col-sm-offset-3" style="height:500px;display:block;margin:auto;">
				<div class="" style="padding:20px;border:1px solid lightgrey;border-radius:2px;background-color:white;">
                    <div class="" style="border-bottom:1px solid lightgrey;">
                        <strong>Editar Usuários</strong>
                    </div>
                    <div class="">
						<form method="POST">
                        <div class="">
							<p style="margin:10px;">Fecha Ingreso</p>
                            <input type="text" name="fecha" placeholder="" value="<?php echo $list_users->getIngreso();?>" class="form-control">
                        </div>
                        <div class="">
							<p style="margin:10px;">Tipo</p>
                            <input type="text" name="tipo" placeholder="" value="<?php echo $list_users->getTipo();?>" class="form-control">
                        </div>
                        <div class="">
							<p style="margin:10px;">Nombre</p>
                            <input type="text" name="nombre" placeholder="" value="<?php echo $list_users->getNombre();?>" class="form-control">
                        </div>
						<div class="">
							<p style="margin:10px;">Saldo</p>
                            <input type="text" name="saldo" placeholder="" value="<?php echo $list_users->getSaldo();?>" class="form-control">
                        </div>
						<div class="">
							<p style="margin:10px;">Estado</p>
                            <input type="text" name="estado" placeholder="" value="<?php echo $list_users->getEstado();?>" class="form-control">
                        </div>
						<div class="">
							<p style="margin:10px;">Pass</p>
                            <input type="text" name="pass" placeholder="" value="<?php echo $list_users->getPass();?>" class="form-control">
                        </div>
						<div class="">
							<p style="margin:10px;">Sobre</p>
                            <input type="text" name="sobre" placeholder="" value="<?php echo $list_users->getSobre();?>" class="form-control">
                        </div>
						<input type="hidden" value="<?php echo $list_users->getIdUser(); ?>" name="id">
						<div>
                            <input type="submit" value="Enviar" style="background-color:rgba(64,137,255,1);color:white;padding:5px;margin-top:5px;border:1px;border-radius:2px;">
                        </div>
						<div>
                            <input type="submit" name="exit" value="Salir" style="background-color:rgba(64,137,255,1);color:white;padding:5px;margin-top:5px;border:1px;border-radius:2px;">
                        </div>
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