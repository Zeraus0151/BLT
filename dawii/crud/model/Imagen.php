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
class Imagen{
    //put your code here
    private $creacion;
    private $descripcion;
    private $nombre;
	private $id_imgs;
	
    public function __construct($creacion, $descripcion, $nombre,$id_imgs=null) {
        $this->idimagenes = $id_imgs;
        $this->fecha_creacion = $creacion;
        $this->descripcion = $descripcion;
        $this->nombre = $nombre;  
    }

    function getIdImgs() {
        return $this->idimagenes;
    }
	
    function getCreacion() {
        return $this->fecha_creacion;
    }
    
    function getDescripcion() {
        return $this->descripcion;
    }
    
    function getNombre() {
        return $this->nombre;
    }    
	
    function setIdImgs($id_imgs) {
        $this->idnoticias = $id_imgs;
    }
    function setCreacion($creacion) {
        $this->fecha_ingreso = $creacion;
    }  
	function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}
