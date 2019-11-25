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
$users = null;
$message = "Usuario no encontrado !!";
if ($data) {
    $message = $data['msg'];
    if (isset($data['users'])) {
        $users = $data['users'];
		//var_dump($users);die;
    }
}
?>
		<br/><br/><br/><br/>
		<div class="">
			<div class="col-sm-6 col-sm-offset-3" style="height:500px;display:block;margin:auto;">
				<div class="" style="padding:20px;border:1px solid lightgrey;border-radius:2px;background-color:white;">
                    <div class="" style="border-bottom:1px solid lightgrey;">
                        <strong>Eliminar Usuário</strong>
                    </div>
                    <div class="">
						<form method="POST" action='<?php echo $this->url?>AdminUsers/removerUser/'>
							<?php if($users):?>
								<input type="hidden" value="<?php echo $users->getIdUser(); ?>" name="id">
							<?php endif;?>
							<div class="form-group">
                                <?php if($users):?>
									<input name="delete" type="submit" class="btn btn-primary" value="eliminar">
                                <?php endif;?>
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