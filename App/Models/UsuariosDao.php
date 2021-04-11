<?php

use App\Core\Conexao;

class UsuariosDao extends Conexao{

	function cadastrarUsuario(Usuario $u){

		$query = "INSERT INTO usuarios (nome, sobrenome, cidade, uf, email, senha, dataCadastro) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $u->getNome());
		$stmt->bindValue(2, $u->getSobrenome());
		$stmt->bindValue(3, $u->getCidade());
		$stmt->bindValue(4, $u->getUf());
		$stmt->bindValue(5, $u->getEmail());
		$stmt->bindValue(6, $u->getSenha());
		$stmt->bindValue(7, $u->getDataCadastro());

		if($stmt->execute()):

			 echo "<script>alert('".$u->getNome()." cadastrado realizado com sucesso'); location ='/usuarios/login'; </script>";

		else:

			echo "<script>alert('Erro ao cadastrar. Verifique os dados e tente novamente'); location ='/usuarios/cadastro'; </script>";
			//print_r($stmt->errorInfo());
		endif;
	} 


	function buscarUsuario($id){

		$query = "SELECT * FROM usuarios WHERE id = ?";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $id);
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

     	else:

     		return [];

     	endif;
	}

	public function listarCidades(){

		$query = "SELECT DISTINCT cidade FROM usuarios order by cidade";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

     	else:
     		
     		return [];

     	endif;
	}
}