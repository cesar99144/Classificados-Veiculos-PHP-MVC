<?php

use App\Core\Conexao;

class Favoritos extends Conexao{

    private $idUsuario, $idPostagem;

    public function getIdUsuario(){

        return $this->idUsuario;
    }

    public function setIdUsuario($u){

        $this->idUsuario = $u;
    }

    public function getIdPostagem(){

        return $this->idPostagem;
    }

    public function setIdPostagem($p){

        $this->idPostagem = $p;
    }

}