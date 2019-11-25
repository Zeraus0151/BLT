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
class AdminNews extends Admin{
    
    public function __construct() {
        parent::__construct();
        $this->model = new NoticiaDAO();
    }
	
	public function index() {
		$this->model = new NoticiaDAO();
        $data['listNews'] = $this->model->getListNoticias();
		//var_dump($data['listNews']);die;
        $this->view->load("header");
        $this->view->load("news", $data);
    }
	
	public function addNews() {
		$data['msg']="";
		if($_POST)
		{
			//$id_user = $_POST[''];
			$ingreso = $_POST['fecha'];
			$titulo = $_POST['titulo'];
			$descripcion = $_POST['descripcion'];
			if($ingreso && $titulo && $descripcion)
			{
				if($this->model->inserirNoticia(new Noticia($ingreso, $titulo, $descripcion))){
                    $this->view->location('AdminNews');
                }else{
                    $data['msg']= "Error al Registar!!";
                }
			}else{
				$data['msg']= "Rellene todos los Campos!";
			}
		}
		$this->view->load('header');
		$this->view->load('agregarNews',$data);
    }
	
	public function editNoticias($id) {
		//var_dump($id);
        $data['news']=$this->model->getNoticiaById($id);
		$data['msg']="";
		//echo "<pre>";
			//var_dump($data['users']);
		//echo "</pre>";
		//die;
		if($_POST){
			$id = $_POST['id'];
			$ingreso = $_POST['fecha'];
			$titulo = $_POST['titulo'];
			$descripcion = $_POST['descripcion'];
			if($id && $ingreso && $titulo && $descripcion)
			{
				$a = new Noticia($ingreso,$titulo,$descripcion,$id);
				if($this->model->actualizarNoticia($a)){
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
			$this->view->location($this->view->getUrl()."/AdminNews");
			return true;
		}
        $this->view->load('header');
        $this->view->load('editarNews',$data);
    }
	
	public function deleteNews($id) {
        $data['msg'] = '';
		//echo "Deletar NotĂ­cia: $id";
        $data['news'] = $this->model->getNoticiaById($id);
        $this->view->load('header');
        $this->view->load('deleteNews', $data);
    }
    
    public function removerNew() {
        $data['msg'] = '';
		if($_POST)
		{
				$id = $_POST['id'];
				if($this->model->removernoticia($id)){
					$data['msg'] ='Noticia eliminada com suceso!';
				}else{
					$data['msg'] ='Error al eliminar Noticia!';            
				}           
		}
        $this->view->load('header');
        $this->view->load('deleteNews', $data);
        
    }
}
