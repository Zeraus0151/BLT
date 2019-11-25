<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Imagem
 *
 * @author IFSul
 */
class Imagem {
    
    private $src;
    private $title;
    private $alt;
    private $descricao;
    private $idImagem;
    
    public function __construct($src, $title, $alt, $descricao, $idImagem=null) {
        $this->src = $src;
        $this->title = $title;
        $this->alt = $alt;
        $this->descricao = $descricao;
        $this->idImagem = $idImagem;
    }
    
    function getSrc() {
        return $this->src;
    }

    function getTitle() {
        return $this->title;
    }

    function getAlt() {
        return $this->alt;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getIdImagem() {
        return $this->idImagem;
    }

    function setSrc($src) {
        $this->src = $src;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setAlt($alt) {
        $this->alt = $alt;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setIdImagem($idImagem) {
        $this->idImagem = $idImagem;
    }
}