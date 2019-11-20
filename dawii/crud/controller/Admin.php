<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author IFSul
 */
class Admin extends Controller{
    
    public function __construct() {
        parent::__construct();
        $this->view->setTemplate('admin');
		$this->login=new Login();
		if($this->login->isLogged())
		{
			//$this->login();
			//die;
		}
    }
    
    public function index() {
		$this->model = new UsuarioDAO();
        $data['listUsers'] = $this->model->getListUsuarios();
        $this->view->load("header");
        $this->view->load("index1", $data);
    }
	public function login()
	{	$data['msg']='';
		if(filter_input(INPUT_POST,'enviar'))
		{//echo oi;die;
			$user=filter_input(INPUT_POST,'user',FILTER_SANITIZE_STRING);
			$pass=filter_input(INPUT_POST,'pass');
			if($user && $pass)
			{
				$conn = mysqli_connect("localhost","root","","dawii");
				$sql="SELECT * FROM usuarios WHERE nombre = '$user' AND pass = '$pass'";
				$result=mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						session_start();
						$_SESSION['id_user']=$row['idusuarios'];
						//echo $_SESSION['id_user'];die;
						$_SESSION['logged']=true;
						$this->index();
					}
				}
			}$data['msg']='no funfa';
		}
	}
}
