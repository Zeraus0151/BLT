<?php
class Tienda extends Controller{

    //private $texto;

    public function __construct() {
        parent::__construct();
        //$this->texto = "Olá Mundo!!";        
    }

    public function index(){
		$this->model = new ImagenDAO();
        $data['listJssor'] = $this->model->getJssor();
		
		$this->model = new JuegoDAO();
        $data['listJuego'] = $this->model->getListJuego();
		//echo var_dump($data['listJssor']);die;
		//$data['listImgs'] = $this->model->getListImagenes();
        $this->view->load('nav');
        $this->view->load('tienda',$data);
    }
	public function viewGame($id){
		//var_dump($id);
		$this->model = new JuegoDAO();
		$data['juegos']=$this->model->getJuegoById($id);
		$data['msg']="";
		$this->view->load('nav');
        $this->view->load('view-game',$data);
		/*if($idJuego){
			$this->model = new JuegoDAO();
			$data['listJuego'] = $this->model->getJuegoById();
			$this->view->load('nav');
			$this->view->load('view-game',$data);
		}
		
		$this->model = new ImagenDAO();
        $data['listJssor'] = $this->model->getJssor();
		
		$this->model = new JuegoDAO();
        $data['listJuego'] = $this->model->getListJuego();
		//echo var_dump($data['listJssor']);die;
		//$data['listImgs'] = $this->model->getListImagenes();
        $this->view->load('nav');
        $this->view->load('tienda',$data);*/
    }
}
