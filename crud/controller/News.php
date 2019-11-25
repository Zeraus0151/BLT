<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News
 *
 * @author IFSul
 */
class News extends Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->model = new NoticiaDAO();
		//var_dump($id);
    }

    public function index($id) {
		//var_dump($id);die;
        //$data['listNews'] = $this->model->getListNoticias();
		$this->model = new NoticiaDAO();
		$data['news']=$this->model->getNoticiaById($id);
		$data['msg']="";
		if($_POST)
		{
			//$idd=$_POST['id'];
			if($_POST['salir'])
			{
				$this->view->location('Home/');
			}
		}
        $this->view->load("nav");
        $this->view->load("news", $data);

    }
}
