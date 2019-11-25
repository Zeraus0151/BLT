<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Noticia
 *
 * @author IFSul
 */
class Noticia{
    //put your code here
    private $ingreso;
    private $titulo;
    private $descripcion;
	private $id_news;
	private $img;
	
    public function __construct($ingreso, $titulo, $descripcion,$id_news=null,$img=null) {
        $this->idnoticias = $id_news;
        $this->fecha_ingreso = $ingreso;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;  
        $this->nombre = $img;  
    }

    function getIdNews() {
        return $this->idnoticias;
    }
	
    function getIngreso() {
        return $this->fecha_ingreso;
    }
    
    function getTitulo() {
        return $this->titulo;
    }
    
    function getDescripcion() {
        return $this->descripcion;
    }  
	function getImg() {
        return $this->nombre;
    }    
	
    function setIdNews($id_news) {
        $this->idnoticias = $id_news;
    }
    function setIngreso($ingreso) {
        $this->fecha_ingreso = $ingreso;
    }  
	function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
	function setImg($img) {
        $this->nombre = $img;
    }
}
