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
class AdminImgs extends Admin{
    
    public function __construct() {
        parent::__construct();
        $this->model = new ImagenDAO();
    }
	
	public function index() {
		$this->model = new ImagenDAO();
        $data['listImgs'] = $this->model->getListImagenes();
		//var_dump($data['listNews']);die;
        $this->view->load("header");
        $this->view->load("images", $data);
    }
	
	public function addImgs() {
		$data['msg']="";
		if($_POST)
		{
			//$id_user = $_POST[''];
			$creacion = $_POST['creacion'];
			$descripcion = $_POST['descripcion'];
			$nombre = $_POST['nombre'];
			if($creacion && $descripcion && $nombre)
			{
				if($this->model->inserirImagen(new Imagen($creacion, $descripcion, $nombre))){
                    $this->view->location('Adminimgs');
                }else{
                    $data['msg']= "Error al Registar!!";
                }
			}else{
				$data['msg']= "Rellene todos los Campos!";
			}
		}
		$this->view->load('header');
		$this->view->load('agregarImages',$data);
    }
	
	public function editImagenes($id) {
		//var_dump($id);
        $data['imgs']=$this->model->getImagenById($id);
		$data['msg']="";
		//echo "<pre>";
			//var_dump($data['users']);
		//echo "</pre>";
		//die;
		if($_POST){
			$id = $_POST['id'];
			$creacion = $_POST['fecha'];
			$descripcion = $_POST['descripcion'];
			$nombre = $_POST['nombre'];
			if($id && $creacion && $descripcion && $nombre)
			{
				$a = new Imagen($creacion,$descripcion,$nombre,$id);
				if($this->model->actualizarImagen($a)){
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
			$this->view->location($this->view->getUrl()."/AdminImgs");
			return true;
		}
        $this->view->load('header');
        $this->view->load('editarImages',$data);
    }
	
	public function deleteImgs($id) {
        $data['msg'] = '';
		//echo "Deletar NotĂ­cia: $id";
        $data['imgs'] = $this->model->getImagenById($id);
        $this->view->load('header');
        $this->view->load('deleteImgs', $data);
    }
    
    public function removerImg() {
        $data['msg'] = '';
		if($_POST)
		{
				$id = $_POST['id'];
				if($this->model->removerimagen($id)){
					$data['msg'] ='Imagen eliminada com suceso!';
				}else{
					$data['msg'] ='Error al eliminar Imagen!';            
				}           
		}
        $this->view->load('header');
        $this->view->load('deleteImgs', $data);
        
    }
}
