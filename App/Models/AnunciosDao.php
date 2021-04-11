<?php

use App\Core\Conexao;

class AnunciosDao extends Conexao{

	public function cadastrarAnuncio(Anuncio $v){

		$query = "INSERT INTO veiculosAnuncios (descricao, km, marca, modelo, preco, usuarioAnunciante, imagemVeiculo, estadoVeiculo, titulo, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $v->getDescricao());
		$stmt->bindValue(2, $v->getKm());
		$stmt->bindValue(3, $v->getMarca());
		$stmt->bindValue(4, $v->getModelo());
		$stmt->bindValue(5, $v->getPreco());
		$stmt->bindValue(6, $v->getUsuarioAnunciante());
		$stmt->bindValue(7, $v->getImagemVeiculo());
		$stmt->bindValue(8, $v->getEstadoVeiculo());
		$stmt->bindValue(9, $v->getTitulo());
		$stmt->bindValue(10, "Aberto");

		if($stmt->execute()):

			 echo "<script>alert(' Veículo cadastrado com sucesso'); location ='/anuncios/perfil'; </script>";

		else:

			echo "<script>alert('Erro ao cadastrar. Verifique os dados e tente novamente'); location ='/anuncios/criarAnuncio'; </script>";
			//print_r($stmt->errorInfo());
		endif;
	}

	public function listarAnunciosDoUsuario($idUser){

		$query = "SELECT * FROM veiculosAnuncios WHERE usuarioAnunciante = ?";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $idUser);
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

     	else:

     		return [];

     	endif;
	}

	public function listarTodosAnuncios(){

		//$query = "SELECT * FROM veiculosAnuncios WHERE status = ?";
		$query = "SELECT i.id, i.Nome, i.sobrenome, i.cidade, i.uf, v.id, v.descricao, v.titulo, v.marca, v.modelo, v.preco, v.usuarioAnunciante, v.imagemVeiculo, v.estadoVeiculo, v.status FROM usuarios i INNER JOIN veiculosanuncios v ON v.usuarioAnunciante = i.id WHERE v.status = 'Aberto';";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, 'Aberto');
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

     	else:
     		
     		return [];

     	endif;
	}

	public function abrirAnuncio($idAnuncio){

		$query = "SELECT * FROM veiculosAnuncios WHERE id = ?";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $idAnuncio);
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

     	else:

     		return [];

     	endif;
	}

	public function liberarAnuncio($idAnuncio){

		$query = "UPDATE veiculosanuncios SET status = ? where id = ?";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, "Aberto");
		$stmt->bindValue(2, $idAnuncio);

		if($stmt->execute()):

			echo "<script>alert(' Anúncio liberado com sucesso'); location ='/anuncios/perfil'; </script>";

	   else:

		   echo "<script>alert('Erro ao liberar anúncio. Tente novamente'); location ='/anuncios/perfil'; </script>";
		   //print_r($stmt->errorInfo());
	   endif;
	}

	public function BloquearAnuncio($idAnuncio){

		$query = "UPDATE veiculosanuncios SET status = ? where id = ?";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, "Desativado");
		$stmt->bindValue(2, $idAnuncio);

		if($stmt->execute()):

			echo "<script>alert(' Anúncio desativado com sucesso'); location ='/anuncios/perfil'; </script>";

	   else:

		   echo "<script>alert('Erro ao desativado anúncio. Tente novamente'); location ='/anuncios/perfil'; </script>";
		   //print_r($stmt->errorInfo());
	   endif;
	}

	public function listarMarcas(){

		$query = "SELECT DISTINCT marca FROM veiculosanuncios";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

     	else:
     		
     		return [];

     	endif;
	}

	public function pesquisarAnuncioMarca($searchMarca){

		$query = "SELECT * FROM veiculosanuncios WHERE marca LIKE ? COLLATE utf8_general_ci";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $searchMarca);
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

     	else:
     		
     		return [];

     	endif;
	}

	public function pesquisarAnuncioTitulo($searchTitulo){

		$query = "SELECT * FROM veiculosanuncios WHERE titulo LIKE ? OR descricao LIKE ? COLLATE utf8_general_ci";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, "%{$searchTitulo}%");
		$stmt->bindValue(2, "%{$searchTitulo}%");
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

     	else:
     		
     		return [];

     	endif;
	}

}