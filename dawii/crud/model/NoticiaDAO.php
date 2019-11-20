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
class NoticiaDAO extends Model {

    private $listNoticias;

    public function __construct() {
        parent::__construct();
        $this->listaNoticias = [];
    }

    public function getListNoticias() {
        $sql = "SELECT * FROM noticias";
        $result = $this->ExecuteQuery($sql, []);
        foreach ($result as $linha) {
            $noticia = new Noticia($linha['fecha_ingreso'], $linha['titulo'], $linha['descripcion'],$linha['idnoticias']);
            $this->listNoticias[] = $noticia;
        }
		//var_dump($this->listNoticias);die;
        return $this->listNoticias;
    }
	public function getListNoticiasImagenes() {
        $sql = "SELECT * FROM noticias AS n INNER JOIN  imagenes as i ON i.noticias_idnoticias = n.idnoticias WHERE idnoticias = noticias_idnoticias;";
        $result = $this->ExecuteQuery($sql, []);
        foreach ($result as $linha) {
            $noticia = new Noticia($linha['fecha_ingreso'], $linha['titulo'], $linha['descripcion'],$linha['idnoticias'],$linha['nombre']);

            $this->listNoticias[] = $noticia;
        }
		//var_dump($this->listNoticias);die;
        return $this->listNoticias;
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

    public function getNoticiaById($id) {
        $sql = "SELECT * FROM noticias WHERE idnoticias = :id";
        $result = $this->ExecuteQuery($sql, [':id' => $id]);
//        echo "<pre>";
//        var_dump($result);
//        echo "</pre>";
        if ($result) {
            //$listImagens = $this->getImagensFromNoticia($id);
            $news = $result[0];
            return new Noticia($news['fecha_ingreso'], $news['titulo'], $news['descripcion'],$news['idnoticias']);
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
    public function inserirNoticia($news) {
        $sql = "INSERT INTO noticias(fecha_ingreso,titulo,descripcion) VALUES(:fecha_ingreso,:titulo,:descripcion)";
        $result = $this->ExecuteCommand($sql, 
                [':fecha_ingreso' => $news->getIngreso(),
				':titulo' => $news->getTitulo(),
				':descripcion' => $news->getDescripcion()]);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    
    public function actualizarNoticia($news) {
        $sql = 'UPDATE noticias SET fecha_ingreso = :fecha_ingreso,'
                .' titulo = :titulo,'.
				'descripcion = :descripcion'.
				' WHERE idnoticias = :id';
        $result = $this->ExecuteCommand($sql,
		[':fecha_ingreso' => $news->getIngreso(),
		':titulo' => $news->getTitulo(),
		':descripcion' => $news->getDescripcion(),
		':id' => $news->getIdNews()]);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
    public function removernoticia($id) {
        $sql = "DELETE FROM noticias WHERE idnoticias = :id";
        if($this->ExecuteCommand($sql, [':id'=>$id])){
            return true;
        }else{
            return false;
        }
    }
    
}
