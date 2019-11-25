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
class AdminUsers extends Admin{
    
    public function __construct() {
        parent::__construct();
        $this->model = new UsuarioDAO();
    }
	
	public function index() {
		$this->model = new UsuarioDAO();
        $data['listUsers'] = $this->model->getListUsuarios();
        $this->view->load("header");
        $this->view->load("users", $data);
    }
	
	public function addUsers() {
		$data['msg']="";
		if($_POST)
		{
			//$id_user = $_POST[''];
			$ingreso = $_POST['fecha'];
			$tipo = $_POST['tipo'];
			$nombre = $_POST['nombre'];
			$saldo = $_POST['saldo'];
			$estado = $_POST['estado'];
			$pass = $_POST['pass'];
			$sobremi = $_POST['sobre'];
			if($ingreso && $tipo && $nombre && $saldo && $estado && $pass && $sobremi)
			{
				if($this->model->inserirUsuario(new Usuario($ingreso,$tipo,$nombre,$saldo,$estado,$pass,$sobremi))){
                    $this->view->location('AdminUsers');
                }else{
                    $data['msg']= "Error al Registar!!";
                }
			}else{
				$data['msg']= "Rellene todos los Campos!";
			}
		}
		$this->view->load('header');
		$this->view->load('agregarUsers',$data);
    }
	
	public function editUsuarios($id) {
		//var_dump($id);
        $data['users']=$this->model->getUsuarioById($id);
		$data['msg']="";
		//echo "<pre>";
			//var_dump($data['users']);
		//echo "</pre>";
		//die;
		if($_POST){
			$id = $_POST['id'];
			$ingreso = $_POST['fecha'];
			$tipo = $_POST['tipo'];
			$nombre = $_POST['nombre'];
			$saldo = $_POST['saldo'];
			$estado = $_POST['estado'];
			$pass = $_POST['pass'];
			$sobremi = $_POST['sobre'];
			if($id && $ingreso && $tipo && $nombre && $saldo && $estado && $pass && $sobremi)
			{
				$a = new Usuario($ingreso,$tipo,$nombre,$saldo,$estado,$pass,$sobremi,$id);
				if($this->model->actualizarUsuario($a)){
                    $this->index();
					return true;
                }else{
                    $data['msg']= "Error al Actualizar!!";
                }
			}else{
				$data['msg']= "Rellene todos los Campos!";
			}
		}else if(filter_input(INPUT_POST, 'exit'))
		{
			$this->view->location($this->view->getUrl()."/AdminUsers");
			return true;
		}
        $this->view->load('header');
        $this->view->load('editarUsers',$data);
    }
	
	public function deleteUsers($id) {
        $data['msg'] = '';
//        echo "Deletar Notícia: $id";
        $data['users'] = $this->model->getUsuarioById($id);
        $this->view->load('header');
        $this->view->load('deleteUsers', $data);
    }
    
    public function removerUser() {
        $data['msg'] = '';
		if($_POST)
		{
				$id = $_POST['id'];
				if($this->model->removerusuario($id)){
					$data['msg'] ='Usuario eliminado com suceso!';
				}else{
					$data['msg'] ='Error al eliminar Usuario!';            
				}           
		}
        $this->view->load('header');
        $this->view->load('deleteUsers', $data);
        
    }
}
