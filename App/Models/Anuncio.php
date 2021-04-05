<?php

use App\Core\Conexao;

class Anuncio extends Conexao{

	private $descricao, $km, $marca, $modelo, $preco, $usuarioAnunciante, $imagemVeiculo, $estadoVeiculo, $titulo;

	public function getDescricao(){
		return $this->descricao;
	}
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	
	}

	public function getKm(){
		return $this->km;
	}
	
	public function setKm($km){
		$this->km = $km;
	
	}

	public function getMarca(){
		return $this->marca;
	}
	
	public function setMarca($marca){
		$this->marca = $marca;
	
	}

	public function getModelo(){
		return $this->modelo;
	}
	
	public function setModelo($modelo){
		$this->modelo = $modelo;
	
	}

	public function getPreco(){
		return $this->preco;
	}
	
	public function setPreco($preco){
		$this->preco = $preco;
	
	}

	public function getUsuarioAnunciante(){
		return $this->usuarioAnunciante;
	}
	
	public function setUsuarioAnunciante($usuarioAnunciante){
		$this->usuarioAnunciante = $usuarioAnunciante;
	
	}

	public function getImagemVeiculo(){
		return $this->imagemVeiculo;
	}
	
	public function setImagemVeiculo($imagemVeiculo){
		$this->imagemVeiculo = $imagemVeiculo;
	
	}

	public function getEmail(){
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email = $email;
	
	}

	public function getTelefone(){
		return $this->telefone;
	}
	
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	
	}

	public function getEstadoVeiculo(){

		return $this->estadoVeiculo;

	}

	public function setEstadoVeiculo($e){

		$this->estadoVeiculo = $e;
	}

	public function getTitulo(){

		return $this->titulo;

	}

	public function setTitulo($t){

		$this->titulo = $t;
	}
}