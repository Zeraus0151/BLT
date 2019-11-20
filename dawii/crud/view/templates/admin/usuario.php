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
class Usuario{
    //put your code here
    private $id_user;
    private $ingreso;
    private $tipo;
    private $nombre;
    private $saldo;
    private $estado;
    private $pass;
    private $sobremi;

    public function __construct($id_user, $ingreso, $tipo, $nombre, $saldo, $estado, $pass, $sobremi) {
        $this->idusuarios = $id_user;
        $this->fecha_ingreso = $ingreso;
        $this->tipo = $tipo;
        $this->nombre = $nombre;  
		$this->saldo = $saldo;
		$this->estado = $estado;
		$this->pass = $pass;
		$this->sobremi = $sobremi;
    }

    function getIdUser() {
        return $this->idusuarios;
    }
	
    function getIngreso() {
        return $this->fecha_ingreso;
    }
    
    function getTipo() {
        return $this->tipo;
    }
    
    function getNombre() {
        return $this->nombre;
    }    
	
    function getSaldo() {
        return $this->saldo;
    }
	
    function getEstado() {
        return $this->estado;
    }
	
    function getPass() {
        return $this->pass;
    }
	
    function getSobre() {
        return $this->sobremi;
    }
	
    function setIdUser($id_user) {
        $this->idusuarios = $id_user;
    }
    function setIngreso($ingreso) {
        $this->fecha_ingreso = $ingreso;
    }  
	function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
	
	function setEstado($estado) {
        $this->estado = $estado;
    }
    
    function setPass($pass) {
        $this->pass = $pass;
    }

    function setSobre($sobremi) {
        $this->sobremi = $sobremi;
    }
}
