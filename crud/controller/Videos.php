<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Videos
 *
 * @author IFSul
 */
class Videos extends Controller {

    //put your code here

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('videos');
        $this->view->load('footer');
    }

}
