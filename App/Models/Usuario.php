<?php

use App\Core\Conexao;

class Usuario extends Conexao{

 	private $nome, $sobrenome, $cidade, $uf, $email, $senha, $dataCadastro, $telefone;

 	public function getNome(){

 		return $this->nome;
 	}
 	
 	public function setNome($nome){

 		$this->nome = $nome;
 	
 	}

 	public function getSobrenome(){

 		return $this->sobrenome;
 	}
 	
 	public function setSobrenome($sobrenome){

 		$this->sobrenome = $sobrenome;
 	
 	}

 	public function getCidade(){
 		return $this->cidade;
 	}
 	
 	public function setCidade($cidade){
 		$this->cidade = $cidade;
 	
 	}

 	public function getUf(){
 		return $this->uf;
 	}
 	
 	public function setUf($uf){
 		$this->uf = $uf;
 	
 	}

 	public function getEmail(){
 		return $this->email;
 	}
 	
 	public function setEmail($email){
 		$this->email = $email;
 	
 	}

 	public function getSenha(){
 		return $this->senha;
 	}
 	
 	public function setSenha($senha){
 		$this->senha = $senha;
 	
 	}

 	public function getDataCadastro(){
 		return $this->dataCadastro;
 	}
 	
 	public function setDataCadastro($dataCadastro){
 		$this->dataCadastro = $dataCadastro;
 	
 	}

 	public function getTelefone(){
 		return $this->telefone;
 	}
 	
 	public function setTelefone($t){
 		$this->telefone = $t;
 	
 	}

 }