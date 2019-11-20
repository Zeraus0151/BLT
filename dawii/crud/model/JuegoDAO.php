<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoticiaDAO
 *
 * @author IFSul
 */
class JuegoDAO extends Model {

    private $listImagenes;

    public function __construct() {
        parent::__construct();
        $this->listaJuegos = [];
    }

    public function getListJuego() {
        $sql = "SELECT * FROM juegos";
        $result = $this->ExecuteQuery($sql, []);
        foreach ($result as $linha) {
            $juego = new Juego($linha['nombree'], $linha['descripcion'], $linha['autor'],$linha['distribuidora'],$linha['lanzamiento'],$linha['capa'],$linha['idjuegos']);

            $this->listJuegos[] = $juego;
        }
		//var_dump($this->listNoticias);die;
        return $this->listJuegos;
    }
	
	public function getJssor(){
		$sql = "SELECT * FROM imagenes WHERE descripcionn ='jssor'";
        $result = $this->ExecuteQuery($sql, []);
        foreach ($result as $linha) {
            $imagen = new Imagen($linha['fecha_creacion'], $linha['descripcionn'], $linha['nombre'],$linha['idimagenes']);
            $this->Jssor[] = $imagen;
        }
		//var_dump($this->listNoticias);die;
        return $this->Jssor;
	}
    /*
     public function getListNoticiasImagens() {
        $sql = "SELECT * FROM news";
        $result = $this->ExecuteQuery($sql, []);
        foreach ($result as $linha) {
            
            $listImagens = $this->getImagensFromNoticia($linha['id_news']);
            
            $noticia = new Noticia($linha['text'], $linha['title'], $listImagens, $linha['id_news']);

            $this->listNoticias[] = $noticia;
        }
        return $this->listNoticias;
    }*/

    public function getJuegoById($id) {
        //$sql = "SELECT * FROM juegos WHERE idjuegos = :id";
        $sql = "SELECT * FROM juegos AS game INNER JOIN
		imagenes as img ON img.juegos_idjuegos =
		game.idjuegos WHERE idjuegos = :id;";
        $result = $this->ExecuteQuery($sql, [':id' => $id]);
//        echo "<pre>";
        //var_dump($result);
//        echo "</pre>";
        if ($result) {
            //$listImagens = $this->getImagensFromNoticia($id);
            $linha = $result[0];
            return new Juego($linha['nombree'], $linha['descripcion'], $linha['autor'],$linha['distribuidora'],$linha['lanzamiento'],$linha['capa'],$linha['idjuegos'],$linha['nombre']);
        } else {
            return null;
        }
    }
/*
    public function getImagensFromNoticia($id) {
        $sql = "SELECT i.* FROM news_imagens AS ni "
                . "INNER JOIN  imagens as i "
                . "ON i.id_imagem = ni.id_imagem WHERE id_news = :idnews;";
        //SELECT * FROM imagens WHERE id_portfolio = :idport
        $result = $this->ExecuteQuery($sql, [':idnews' => $id]);
        $listaImagens = [];
        if ($result) {
            foreach ($result as $linha) {
                $listaImagens[] = new Imagem(
                        $linha['src'], $linha['title'], $linha['alt'], $linha['descricao'], $linha['id_imagem']);
            }
        }
        return $listaImagens;
    }
*/
    public function inserirImagen($imgs) {
        $sql = "INSERT INTO imagenes(fecha_creacion,descripcionn,nombre) VALUES(:fecha_creacion,:descripcion,:nombre)";
        $result = $this->ExecuteCommand($sql, 
                [':fecha_creacion' => $imgs->getCreacion(),
				':descripcion' => $imgs->getDescripcion(),
				':nombre' => $imgs->getNombre()]);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    
    public function actualizarImagen($imgs) {
        $sql = 'UPDATE imagenes SET fecha_creacion = :fecha_creacion,'
                .' descripcionn = :descripcion,'.
				'nombre = :nombre'.
				' WHERE idimagenes = :id';
        $result = $this->ExecuteCommand($sql,
		[':fecha_creacion' => $imgs->getCreacion(),
		':descripcion' => $imgs->getDescripcion(),
		':nombre' => $imgs->getNombre(),
		':id' => $imgs->getIdImgs()]);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
    public function removerImagen($id) {
        $sql = "DELETE FROM imagenes WHERE idimagenes = :id";
        if($this->ExecuteCommand($sql, [':id'=>$id])){
            return true;
        }else{
            return false;
        }
    }
    
}
