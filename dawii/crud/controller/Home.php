<?php
class Home extends Controller{

    //private $texto;

    public function __construct() {
        parent::__construct();
        //$this->texto = "Olá Mundo!!";        
    }

    public function index(){
		$this->model = new ImagenDAO();
        $data['listJssor'] = $this->model->getJssor();
		
		$this->model = new NoticiaDAO();
        $data['listNews'] = $this->model->getListNoticiasImagenes();
		//echo var_dump($data['listJssor']);die;
		//$data['listImgs'] = $this->model->getListImagenes();
        $this->view->load('nav');
        $this->view->load('index',$data);
    }

}
