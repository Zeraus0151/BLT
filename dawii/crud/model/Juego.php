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
class Juego{
    //put your code here
    private $nombree;
    private $descripcion;
    private $autor;
	private $distribuidora;
	private $lanzamiento;
	private $capa;
	private $id_juego;
	private $img;
	
    public function __construct($nombree, $descripcion, $autor, $distribuidora, $lanzamiento, $capa, $id_juego=null,$img=null) {
        $this->nombree = $nombree;
        $this->descripcion = $descripcion;
        $this->autor = $autor;
        $this->distribuidora = $distribuidora;  
        $this->lanzamiento = $lanzamiento;  
        $this->capa = $capa;  
        $this->idjuegos = $id_juego;  
        $this->nombre = $img;  
    }

    function getIdJuego() {
        return $this->idjuegos;
    }
	function getImg() {
        return $this->nombre;
    }
	
    function getNombre() {
        return $this->nombree;
    }
    
    function getDescripcion() {
        return $this->descripcion;
    }
    
    function getAutor() {
        return $this->autor;
    }  
	
	function getDistribuidora() {
        return $this->distribuidora;
    }  
	
    function getLanzamiento() {
        return $this->lanzamiento;
    }  
	
	function getCapa() {
        return $this->capa;
    }    
	
    function setIdJuego($id_juego) {
        $this->idjuegos = $id_juego;
    }
    function setImg($img) {
        $this->nombre = $img;
    }
	
    function setNombre($nombre) {
        $this->nombree = $nombre;
    }  
	
	function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    
    function setAutor($autor) {
        $this->autor = $autor;
    }
	
	function setDistribuidora($distribuidora) {
        $this->distribuidora = $distribuidora;
    }
	function setLanzamiento($lanzamiento) {
        $this->lanzamiento = $lanzamiento;
    }
	function setCapa($capa) {
        $this->capa = $capa;
    }
}
