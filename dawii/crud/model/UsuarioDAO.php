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
class UsuarioDAO extends Model {

    private $listNoticias;

    public function __construct() {
        parent::__construct();
        $this->listaUsuarios = [];
    }

    public function getListUsuarios() {
        $sql = "SELECT * FROM usuarios";
        $result = $this->ExecuteQuery($sql, []);
        foreach ($result as $linha) {
            $usuario = new Usuario($linha['fecha_ingreso'], $linha['tipo'], $linha['nombre'], $linha['saldo'], $linha['estado'], $linha['pass'], $linha['sobremi'],$linha['idusuarios'] );

            $this->listUsuarios[] = $usuario;
        }
		//var_dump($this->listUsuarios);die;
        return $this->listUsuarios;
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

    public function getUsuarioById($id) {
        $sql = "SELECT * FROM usuarios WHERE idusuarios = :idusers";
        $result = $this->ExecuteQuery($sql, [':idusers' => $id]);
//        echo "<pre>";
//        var_dump($result);
//        echo "</pre>";
        if ($result) {
            //$listImagens = $this->getImagensFromNoticia($id);
            $users = $result[0];
            return new Usuario($users['fecha_ingreso'], $users['tipo'], $users['nombre'], $users['saldo'], $users['estado'], $users['pass'], $users['sobremi'],$users['idusuarios'] );
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
    public function inserirUsuario($users) {
        $sql = "INSERT INTO usuarios(fecha_ingreso,tipo,nombre,saldo,estado,pass,sobremi) VALUES(:fecha_ingreso,:tipo,:nombre,:saldo,:estado,:pass,:sobremi)";
        $result = $this->ExecuteCommand($sql, 
                [':fecha_ingreso' => $users->getIngreso(),
				':tipo' => $users->getTipo(),
				':nombre' => $users->getNombre(),
				':saldo' => $users->getSaldo(),
				':estado' => $users->getEstado(),
				':pass' => $users->getPass(),
				':sobremi' => $users->getSobre()]);
				//var_dump($_POST);die;
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    
    public function actualizarUsuario($users) {
        $sql = 'UPDATE usuarios SET fecha_ingreso = :fecha_ingreso,'
                .' tipo = :tipo,'.
				'nombre = :nombre,'.
				'saldo = :saldo,'.
				'estado = :estado,'.
				'pass = :pass,'.
				'sobremi = :sobre'.' WHERE idusuarios =:id';
        $result = $this->ExecuteCommand($sql,
		[':fecha_ingreso' => $users->getIngreso(),
				':tipo' => $users->getTipo(),
				':nombre' => $users->getNombre(),
				':saldo' => $users->getSaldo(),
				':estado' => $users->getEstado(),
				':pass' => $users->getPass(),
				':sobre' => $users->getSobre(),
				':id' => $users->getIdUser()]);
		
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
    public function removerusuario($id) {
        $sql = "DELETE FROM usuarios WHERE idusuarios = :id";
        if($this->ExecuteCommand($sql, [':id'=>$id])){
            return true;
        }else{
            return false;
        }
    }
    
}
